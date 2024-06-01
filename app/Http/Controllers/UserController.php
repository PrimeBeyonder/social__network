<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function account() {
        $data = [
            ["id" => 1, "name" => "Andrew Thomas" , "bio" => "nga paw, sayr G"],
        ];
        return view("socail.index", ["user" => $data]);
    }
}
