<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  __construct(User $user){
        $this->user = $user;
    }
    public function get_name(Request $request){
        $user=$this->user->find($request['id']);
        echo $user->name;
    }
    public function set_name(Request $request){
      

        $user = $this->user->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => '11212121'
        ]);   
                echo $request->name;
 
    }
}
