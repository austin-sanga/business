<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProject;
use App\Models\FiledInvestment;

class DashboardController extends Controller
{
    //

    // ministatement on general use
    function viewMiniStatement(){
        return view('investment.ministatement');
    }
}
