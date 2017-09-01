<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\User as User; 
use Auth;
use DB;
use Log;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();

        // if($request->has('q'){
        //     $search = $request->q;
        //     $users = User::search($search);
        // } 

        $data['users'] = $users;
        return view('users.index' , $data);


        // })
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::findOrFail($id);

        $userPosts = $user->posts;

        
        $data['user'] = $user;
        $data['userPosts'] = $userPosts;   

        Log::info('User account ' . $user->id . ' was viewed');

        return view('users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);    

        $data['user'] = $user;



        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $result = $this->validate($request, User::$rules);

        $user = User::findOrFail($id);


        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        Log::info('User ' . $user->id . ' was edited');

        $request->session()->flash("successMessage" , "Your account was updataed successfully");


        return \Redirect::action('UsersController@show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);


        $user->delete();

         Log::info('User ' . $user->id . ' was deleted');


        return \Redirect::action('PostsController@index');
    }
}
