<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequestAdmin;
use App\User;

class UserController extends Controller
{
    public function index(User $user){

        $user = User::all(); // select * from user table
        return view('admin.user.index', compact('user'));
    }

    /* create function to return view add new user */
    public function create(){

        return view('admin.user.add');
    }


    /* add new user  */
    protected function store(AddUserRequestAdmin $request ,User $user )
    {
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/adminPanel/users')->withFlashMessage('user added successfully');
    }


    /* Edit to userInfo */
    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    /*update to userInfo*/
    public function update($id , Request $request){
        $updatedUser = User::find($id);
        $updatedUser->fill($request->all())->save();
        return redirect('adminPanel/users');
    }

}
