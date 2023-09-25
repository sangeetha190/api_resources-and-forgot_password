<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as ResourcesUser;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function user($id)
    {
        $user = User::find($id);
        // return $user; // this will give
        return new ResourcesUser($user); //this will give json format data.
    }

    public function users()
    {
        $user = User::all();
        // return $user;
        return new UserCollection($user);
    }
}
