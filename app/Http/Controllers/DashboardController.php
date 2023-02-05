<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProject;
use App\Models\FiledInvestment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    // ministatement on general use
    function viewMiniStatement($id){
        $statements = FiledInvestment::where('filed_investments.user_id',$id)
        ->join('new_projects','filed_investments.project_id','=','new_projects.id')
        ->get();
        return view('investment.ministatement', compact('statements'));
    }

    // portfolio amount calculation

      function dashboardData() {
        $portfolio = FiledInvestment::where('filed_investments.user_id', Auth::user()->id)
            ->where('filed_investments.status_id', 2)
            ->join('new_projects', 'filed_investments.project_id', '=', 'new_projects.id')
            ->where('new_projects.status_id', 3)
            ->groupBy('filed_investments.project_id','new_projects.id','new_projects.name','new_projects.est_start_date','new_projects.start_date','new_projects.est_duration','new_projects.date_of_maturity','new_projects.budget','new_projects.est_roi','new_projects.roi','new_projects.user_id','new_projects.manager_notice','new_projects.project_contract','new_projects.status_id','new_projects.created_at','new_projects.updated_at')
            ->selectRaw('sum(filed_investments.amount_invested) as total_investment, new_projects.*')
            ->get();

        $total_investment = $portfolio->sum('total_investment');
        $total_roi = 0;
        foreach ($portfolio as $project) {
            $total_roi += $project->total_investment / $project->budget * $project->roi;
        }

        $portfolio = $total_investment + $total_roi;

        return view('dashboard', compact('portfolio'));
    }





}

