<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProject;
use App\Models\FiledInvestment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    //Controller for clients

    // call investments with data for tables
    function investment(){
            $published = NewProject::where('status_id','1')->skip(0)->take(3)->get();
            $ongoing  = NewProject::where('status_id','2')->skip(0)->take(3)->get();
            $matured = NewProject::where('status_id','3')->skip(0)->take(3)->get();
            return view('investment.investments', compact('published','ongoing','matured'));
    }

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
        $depositUpload = time().'_'.$req->deposit_upload->extension();

        // public folder storing
        $req->deposit_upload->move(public_path('FiledInvestment',$depositUpload));

        // Storing to D
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

}
