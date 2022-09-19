<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProject;
use App\Models\FiledInvestment;
use Illuminate\Support\Facades\DB;

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
}
