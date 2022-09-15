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
        $published = NewProject::find($id);
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

    // passing data on opening startproject


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
    return DB::table('new_projects')
     ->join('project_statuses','project_statuses.id','=','new_projects.status_id')
     ->get();
 }

}



