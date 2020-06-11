<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();//gets all of the users and puts them in a variable
        return view('admin.users.index')->with('users', $users); //returns a view with a variable users, which will be variable in the view
    }

    //    THIS ISN'T NEEDED, BECAUSE USERS CAN REGISTER ON THEIR OWN
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }
    //
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\User  $user
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(User $user)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }

        return view('admin.users.edit')->with([
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->FirstName = $request->FirstName;
        $user->LastName = $request->LastName;
        $user->email = $request->email;

        if ($user->save()){
            $request->session()->flash('success', $user->FirstName. ' has been updated');
        } else {
            $request->session()->flash('error', 'Error updating user');
        }


        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }

        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
