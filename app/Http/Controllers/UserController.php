<?php

namespace App\Http\Controllers;

use App\Model\Member;
use App\Model\Merchant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createUser (Request $request) {

        $data = [
            'email'  =>  $request['email'],
            'password'  => Hash::make($request['password'])
        ];

        return Member::create($data);
    }
}
