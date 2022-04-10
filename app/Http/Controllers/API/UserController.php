<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{

    public function dump(Request $req)
    {
        $validate = Validator::make($req->all(), ['gender' => ['nullable', 'in:m,f']]);
        if ($validate->fails()) {
            return $validate->errors();
        } else {
            $user =    User::where($req->only('gender'))->first();
            if ($user) {
                return $user;
            }
            return    User::where($req->only('gender'))->get();
        }

        return User::insert([
            [
                'fname' => 'Shagil',
                'lname' => 'Ahmad',
                'username' => 'shagil',
                'gender' => 'm',
                'email' => 'shagil@fake.com',
                'remark' => 'Zxcvvdc',
            ],
            [
                'fname' => 'Shivani',
                'lname' => 'Singh',

                'username' => 'shivam.singh',
                'gender' => 'f',
                'email' => 'shivanisingh@fake.com',
                'remark' => 'Zxcvvdc',
            ]
        ]);
        return 1;
    }
    //
}
