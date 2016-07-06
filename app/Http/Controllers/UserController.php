<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * [ Show all users on blog ]
     * @return [view] [list]
     */
    public function show(){
        
    	$users = User::all();
    	return view('user.list', compact('users'));
    }

    
    /**
     * [Create user function, return a creation blade]
     * @return [view] [create]
     */
    public function create(){
    	return view('user.create');
    }

    /**
     * [store on DB with validation]
     * @param  UserRequest $request [request from users]
     * @return [redirect]               [users/create]
     */
    public function store(UserRequest $request){
        // check some condition
        if( $request->get('password') != $request->get('rpassword')){
            return redirect('users/create');
        }
    	//validation and create
    	User::create([
    		'username'   => $request->get('username'),
    		'password'   => Hash::make($request->get('password')),
    		'email'      => $request->get('email'), 
    		'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);
    	return redirect('users/show');
    }

    /**
     * [finding user to send data to edit]
     * @param  [int] $id [id of user]
     * @return [view]     [edit]
     */
    public function edit($id){
    	$user = User::where('user_id', $id)->firstOrFail();
    	return view('user.edit', compact('user'));
    }

    /**
     * [finding user to update data from request]
     * @param  UserRequest $request [request from user]
     * @param  [id]      $id      [id of user]
     * @return [redirect]               [users/show]
     */
    public function update(UserRequest $request, $id){
    	$user = User::where('user_id', $id)->firstOrFail();
    	$user->username = $request->get('username');
    	$user->password = Hash::make($request->get('password'));
    	$user->email = $request->get('email');
    	$user->save();
    	return redirect('users/show');
    }

    
}
