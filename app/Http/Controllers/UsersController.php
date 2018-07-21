<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        
        return view('users.index', ['users' => $users,]);
    }
    
    public function show($id){
        
        return redirect("/");
        //$user = User::find($id);
        // if(\Auth::id() != $user->id){
        //     return redirect('/');
        // } else{
        //     $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(10);
        
        //     $data = ['user' => $user, 'tasks' => $tasks];
        //     $data += $this->counts($user);
            
        //     return view('users.show', $data);
        // }
    }
}
