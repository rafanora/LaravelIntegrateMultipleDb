<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_two;

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
        $user_one = User::all();
        User_two::insert($user_one->toArray());
    }

    public function deletetwo(){
        try {
            $users_two = User_two::all();
            foreach ($users_two as $value) {
                $value->delete();
            }
        } catch (\Throwable $th) {
            return($th);
        }
    }
}
