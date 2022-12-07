<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProject;
use App\Models\FiledInvestment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    /*  Controller for clients */

    // call investments with data for tables
    function investment(){
            $published = NewProject::where('status_id','1')->skip(0)->take(3)->get();
            $ongoing  = NewProject::where('status_id','2')->skip(0)->take(3)->get();

            // matured table
            /* calculation on matured amount and distribution  */
            $matured = FiledInvestment::distinct(['project_id'])
            ->where('filed_investments.status_id','3')
            ->where('filed_investments.user_id',Auth::user()->id)
            ->join('new_projects','filed_investments.project_id','=','new_projects.id')
            ->select('new_projects.name')
            ->skip(0)->take(3)->get();

            // verification status
            $verify = FiledInvestment::where('filed_investments.user_id',Auth::user()->id)
            ->where('filed_investments.status_id','1')
            ->join('new_projects','filed_investments.project_id','=','new_projects.id')
            ->join('statuses','filed_investments.status_id','=','statuses.id')
            ->select('new_projects.name','statuses.status')
            ->skip(0)->take(3)->get();

            return view('investment.investments', compact('published','ongoing','matured','verify'));
    }



    // view more open opportunities
    function ViewMoreOpen(){
        $moreopen = NewProject::where('status_id','1')->get();

        return view('investment.viewmoreopenopportunity',compact('moreopen'));
    }


    // specifc open opportunity
    function specificOpen($id){
        $open = NewProject::where('id',$id)->first();

        $ucount = User::all()->count();

        return view('investment.openopportunity',compact('open','ucount'));

        /*
        Bado cjafanaya calculation of the remaining amount.

        */
    }


    // view more pending verification
    function viewmoreverification(){
        $moreverify = FiledInvestment::where('filed_investments.user_id',Auth::user()->id)
        ->where('filed_investments.status_id','1')
        ->join('new_projects','filed_investments.project_id','=','new_projects.id')
        ->join('statuses','filed_investments.status_id','=','statuses.id')
        ->select('new_projects.id as pid','filed_investments.id as fid','new_projects.name','statuses.status')
        ->skip(0)->take(3)->get();

        return view('investment.viewmorependingverification',['moreverify'=>$moreverify]);
    }



    // specific verification
    function specificVerification($id){
        $verify = FiledInvestment::where('filed_investments.id',$id)
            ->join('new_projects','filed_investments.project_id','=','new_projects.id')
            ->join('statuses','filed_investments.status_id','=','statuses.id')
            ->join('users','new_projects.user_id','=','users.id')
            ->select('filed_investments.project_id','statuses.status','new_projects.name','date_of_deposit','filed_investments.created_at','filed_investments.amount_invested','users.id','users.first_name','users.middle_name','users.last_name','new_projects.manager_notice' )
            ->first();
        return view('investment.verificationstatus',compact('verify'));
    }



    // view more ongoing opportunities
    function viewMoreOngoing(){
        $moreongoing = NewProject::where('status_id','2')->get();

        return view('investment.viewmoreongoinginvestment',compact('moreongoing'));
    }


    // specific ongoing
    function specificOngoing($id){
        $ongoing = NewProject::where('id',$id)->first();

        return view('investment.ongoinginvestment',compact('ongoing'));

    }

    // view more matured investments


    // call invest page, passing project ids
    function invest(){
        $list = NewProject::where('status_id','1')->get();
        return view('investment.invest',['list'=>$list]);
    }

    // save file invest
    function FileInvestment(Request $req){

        // validation
        $req->validate([
            'project_id'=>'required',
            'date_of_deposit'=>'required',
            'amount_invested'=>'required',
            'deposit_upload'=>'required|mimes:png,jpg,jpeg,pdf|max:2048'
        ]);

        // Naming of an upload
        $depositUpload = time().'.'.$req->deposit_upload->extension();

        // public folder storing
        $req->deposit_upload->move(public_path('FiledInvestment'),$depositUpload);

        // Storing to DB
        $filling = new FiledInvestment;
        $filling->user_id = Auth::user()->id;
        $filling->project_id = $req->project_id;
        $filling->amount_invested = $req->amount_invested;
        $filling->date_of_deposit = $req->date_of_deposit;
        $filling->deposit_upload = $depositUpload;
        $saved = $filling->save();

        //  check if investment filed
        if(!$saved){
            App::abort(500, 'Error');
        }
        return redirect('/investments');

    }

    // verification
    // call for user specific filed invest with status 1 and user id of logged in

}
