<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProject;
use App\Models\FiledInvestment;

class DashboardController extends Controller
{
    //

    // ministatement on general use
    function viewMiniStatement($id){
        $statements = FiledInvestment::where('filed_investments.user_id',$id)
        ->join('new_projects','filed_investments.project_id','=','new_projects.id')
        ->get();
        return view('investment.ministatement', compact('statements'));
    }
}
