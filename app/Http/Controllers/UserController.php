<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequestAdmin;
use App\User;

class UserController extends Controller
{
    public function index(){

        return view('admin.user.index');
    }

    /* create function to return view add new user */
    public function create(){

        return view('admin.user.add');
    }


    protected function store(AddUserRequestAdmin $request ,User $user )
    {
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/adminPanel/users')->withFlashMessage('user added successfully');

    }


}
