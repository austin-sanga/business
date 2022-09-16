<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProject;
use Illuminate\Support\Facades\DB;

class ProjectManagerController extends Controller
{

    // displaying project manager & its contents
    function projectManager(){
        $project = NewProject::skip(0)->take(3)->get();
        return view('investment.projectmanager', ['published'=>$project]);
    }

    // viewmore published projects
    function viewMorePublishedProject(){
        $published = NewProject::where('status_id','1')->get();
        return view('investment.viewmorepublishedprojects', ['published'=>$published]);
    }

    // published project view
    function publishedProject($id){
        /* $published = NewProject::find($id);
        return view('investment.publishedproject',['old'=>$published]); */

        $published = NewProject::find($id)
        /* $published = DB::table('new_projects') */
        ->join('users','users.id','=','new_projects.user_id')
        /* ->where('new_projects.id',$id) */
        ->select('new_projects.name as projectName','new_projects.est_start_date','new_projects.est_duration','new_projects.budget','new_projects.est_roi','new_projects.est_roi','users.first_name as fname','users.middle_name as mname','users.last_name as lname','new_projects.manager_notice','new_projects.id')
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
       return view('investment.editpublishedproject',['old'=>$data]);
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


        $imageName = time().'_'.$req->project_contract->extension();

        // public folder storing
        $req->project_contract->move(public_path('ProjectContracts',$imageName));



        // Storing project_contract in DB
         $project =  NewProject::find($req->id);
         $project->project_contract = $imageName;
         $project->save();

        return redirect('projectmanager');

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
    $test = DB::table('new_projects')
    ->join('project_statuses','project_statuses.id','=','new_projects.status_id')
    ->where('new_projects.id',7)
    ->select('new_projects.name as pname','project_statuses.status')
    ->first();

    return view('test',['test'=>$test]);
 }


}



