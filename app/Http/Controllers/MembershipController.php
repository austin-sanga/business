<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MembershipController extends Controller
{
    //controller dealing with membership of the app

    // listing all of the unassigned role users
    function listrole0(){
        $users = User::where('role','0')->get();
        return view('userrequests', ['users'=>$users]);
    }

    // passing id onto the specific request page to update role
    function specificrequest($id)
    {
        $data = User::find($id);
        return view('specificrequest',['data'=>$data]);
    }

    // updating the users role
    function updateRole(Request $req)
    {
        /* $user = User::find($req->id);
        $resto->name=$req->name;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $resto->save(); */


$user = User::find($req->id);

$user->role = $req->role;

$user->save();

        // flash session initiation
        $req->session()->flash('status','Restaurant updated succesfully');

        return redirect('userrequests');
    }
}
