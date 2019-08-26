<?php

namespace App\Http\Controllers;

use App\Phone_two;
use App\User;
use App\User_two;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    //
    public function index(){
        return view('panel')->with([
            'users_one' => User::all(),
            'users_two' => User_two::all(),
        ]);
    }

    public function integrate(){
        $users_one = User::all();
        foreach ($users_one as $value) {
            $user_two = new User_two();
            $user_two->name = $value->name;
            $user_two->save();
        }
    }
    public function deletetwo(){
        //Phone_two::truncate();
        try {
            // $user = User_two::all();
            // $user->delete();
            User_two::truncate();
            var_dump('444');
        } catch (\Throwable $th) {
            return($th);
        }
    }
}
