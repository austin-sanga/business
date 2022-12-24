<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProject;
use App\Models\FiledInvestment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class ProjectManagerController extends Controller
{

    // New project page opening
    function newProject(){
        $users = User::all();
        return view('investment.newproject',compact('users'));
    }


    // displaying project manager & its contents
    function projectManager(){
        $published = NewProject::where('status_id','1')
                    ->where('new_projects.user_id',Auth::user()->id)
                    ->skip(0)->take(3)->get();
        $ongoing  = NewProject::where('status_id','2')
                    ->where('new_projects.user_id',Auth::user()->id)
                    ->skip(0)->take(3)->get();
        $matured = NewProject::where('status_id','3')
                    ->where('new_projects.user_id',Auth::user()->id)
                    ->skip(0)->take(3)->get();

        // verification Queue
        $verify = FiledInvestment::where('filed_investments.status_id','1')
        ->where('new_projects.user_id',Auth::user()->id)
        ->join('new_projects','filed_investments.project_id','=','new_projects.id')
        ->join('users','filed_investments.user_id','=','users.id')
        ->get();

        $test = Auth::user()->id;

        return view('investment.projectmanager', compact('published','ongoing','matured','verify','test'));

    }

    // view more published projects
    function viewMorePublishedProject(){
        $published = NewProject::where('status_id','1')
                    ->where('new_projects.user_id',Auth::user()->id)
                    ->get();
        return view('investment.viewmorepublishedprojects', ['published'=>$published]);
    }

    // view more admin ongoing projects
    function viewMoreOngoingProject(){
        $ongoing = NewProject::where('status_id','2')
                    ->where('new_projects.user_id',Auth::user()->id)
                    ->get();
        return view('investment.viewmoremanagerongoinginvestment', ['ongoing'=>$ongoing]);
    }

    // Specific ongoing project
    function adminOngoing($id){
        $ongoing = DB::table('new_projects')
        ->join('users','users.id','=','new_projects.user_id')
        ->where('new_projects.id',$id)
        ->select('new_projects.name as projectName','new_projects.start_date','new_projects.est_duration','new_projects.budget','new_projects.est_roi','new_projects.est_roi','users.first_name as fname','users.middle_name as mname','users.last_name as lname','new_projects.manager_notice','new_projects.id as pid')
        ->first();

        $id;

        return view('investment.adminongoingproject',compact('ongoing','id'));
    }

    // view more admin matured projects
    function viewMoreAdminMaturedProject(){
        $matured = NewProject::where('status_id','3')
                    ->where('new_projects.user_id',Auth::user()->id)
                    ->get();
        return view('investment.viewmoreadminmaturedinvestment', ['matured'=>$matured]);
    }

    // open mature project
    function openMature($id){
        $project = NewProject::find($id);
        return view('investment.matureproject',compact('project'));
    }

    // Save maturity Data
    function maturityDataSave(Request $req){
        $maturitySave = NewProject::find($req->id);
        $maturitySave->roi = $req -> roi;
        $maturitySave -> date_of_maturity = $req -> date_of_maturity;
        $saved = $maturitySave->save();

        if(!$saved){
            App::abort(500, 'Error');
        }

        return redirect("/maturedinvestment/{$req->id}");
    }


    // matured investment
    function openMatured($id){
        $maturedData = NewProject::find($id);
        return view('investment.maturedinvestment',compact('maturedData'));
    }

    // Making the downlaod function
    function downlaodContract($project_contract){
        $contract = public_path()."/ProjectContracts/$project_contract";

        $header = array(
            'Content-Type: application/pdf',
            'Content-Type: application/jpeg',
            'Content-Type: application/png',
        );

        return response::download($contract, $project_contract, $header);
    }


    // view more verification queue
    function viewMoreVerification(){
        $verify = FiledInvestment::where('filed_investments.status_id','1')
        ->where('new_projects.user_id',Auth::user()->id)
        ->join('new_projects','filed_investments.project_id','=','new_projects.id')
        ->join('users','filed_investments.user_id','=','users.id')
        ->select('filed_investments.id','users.first_name','users.middle_name','users.last_name','filed_investments.amount_invested','filed_investments.deposit_upload')
        ->get();

        return view('investment.viewmoreverificationqueue', compact('verify'));

    }


    // specifc verification
    function specificVerify($id){
        $verify = FiledInvestment::where('filed_investments.id',$id)
        ->join('new_projects','filed_investments.project_id','=','new_projects.id')
        ->join('users','filed_investments.user_id','=','users.id')
        ->select('filed_investments.id','new_projects.name','filed_investments.deposit_upload','filed_investments.date_of_deposit','filed_investments.amount_invested','filed_investments.created_at')
        ->first();

        return view('investment.investmentverification',compact('verify'));
    }


    // On accept verification
    function acceptVerify(Request $req){
        $onAccept = FiledInvestment::find($req->id);
        $onAccept -> status_id = 2;
        $onAccept->save();

        return redirect('/viewmoreverificationqueue');
    }



    // On decline verification



    // published project view
    function publishedProject($id){

        $published = DB::table('new_projects')
        ->join('users','users.id','=','new_projects.user_id')
        ->where('new_projects.id',$id)
        ->select('new_projects.name as projectName','new_projects.est_start_date','new_projects.est_duration','new_projects.budget','new_projects.est_roi','new_projects.est_roi','users.first_name as fname','users.middle_name as mname','users.last_name as lname','new_projects.manager_notice','new_projects.id as pid')
        ->first();

        return view('investment.publishedproject',['old'=>$published]);
    }

    // Delete published project
    function deletePublished($id){
        NewProject::find($id)->delete();
        session()->flash('status','Published project deleted');
        return redirect('/viewmorepublishedprojects');
    }

    //passing data on openening editpublishedproject
    function editpublished($id){
       $data = NewProject::find($id);
       $users = User::all();
       return view('investment.editpublishedproject',['old'=>$data,'users'=>$users]);
    }


    // update data to database of the editpublishedproject
    function editUpdate(Request $req){
        $project =  NewProject::find($req->id);
        $project->name = $req->name;
        $project->est_start_date = $req->est_start_date;
        $project->est_duration = $req->est_duration;
        $project->budget = $req->budget;
        $project->est_roi = $req->est_roi;
        $project->user_id = $req->user_id;
        $project->manager_notice = $req->manager_notice;
        $project->save();

        return redirect("/publishedproject/{$req->id}");

    }


    // passing data on opening startproject
    function startProject($id){
        $data = NewProject::find($id);
        return view('investment.startproject',['old'=>$data]);
     }


    // saving photo to specific project
    function storeContract(Request $req){

        // validation
        $req->validate([
            'project_contract'=>'required|mimes:png,jpg,jpeg,pdf|max:2048'
        ]);


        // Naming of an upload
        $imageName = time().'.'.$req->project_contract->extension();

        // public folder storing
        $req->project_contract->move(public_path('ProjectContracts'),$imageName);

        // Store in storage folder
        /* $req->project_contract->storeAs('FiledInvestment',$imageName); */



        // Storing project_contract in DB
         $project =  NewProject::find($req->id);
         $project->project_contract = $imageName;
         /* $project->status_id = 2;   should be done on final confirmation*/
         $saved = $project->save();

        //  check if project contract got saved
        if(!$saved){
            App::abort(500, 'Error');
        }

        return redirect("/editfinaldetails/{$req->id}");

    }

    // Edit final details page
    function openFinalDetails($id){
        // passing data toward the edit (final details)
        // top details
        $finaldetails = NewProject::where('new_projects.id',$id)
        ->join('users','users.id','=','new_projects.user_id')
        ->first();

        $id = $id;

        $date=now();

        // call on to contributors
        $contributers = FiledInvestment::where('project_id',$id)
        ->join('users','users.id','=','filed_investments.user_id')
        ->groupBy('user_id')
        ->selectRaw('sum(amount_invested) as sum, user_id,first_name,middle_name,last_name')
        ->get();

        return view("investment.editfinaldetails",compact('finaldetails','date','contributers','id'));
    }


    // confirm start details

    function officialStart($id){
        $final =  NewProject::find($id);

        $date=now();

        $final->status_id = 2;
        $final->start_date = $date;
        $saved = $final->save();

        if(!$saved){
            App::abort(500, 'Error');
        }

        return redirect('/dashboard');
    }



    //creating project
    function createProject(Request $req){
        $project = new NewProject;
        $project->name = $req->name;
        $project->est_start_date = $req->est_start_date;
        $project->est_duration = $req->est_duration;
        $project->budget = $req->budget;
        $project->est_roi = $req->est_roi;
        $project->user_id = $req->user_id;
        $project->manager_notice = $req->manager_notice;
        $project->save();

         // flash session initiation
         $req->session()->flash('status','project published successfully');

        return redirect('projectmanager');

    }

    // test controller
function showData(){
    $test = FiledInvestment::where('project_id',10)
    ->groupBy('user_id')
    ->selectRaw('sum(amount_invested) as sum, user_id')
    ->get(/* 'user_id','sum' */);

  return view('test',['test'=>$test]);
 }


}



