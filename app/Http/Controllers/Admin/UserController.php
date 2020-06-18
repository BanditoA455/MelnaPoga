<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Address;
use Gate;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $addresses = Address::all();
        $users = User::all();//gets all of the users and puts them in a variable
        return view('admin.users.index')->with([
            'users'=> $users,
            'addresses' => $addresses
        ]); 
    }

    public function profile()
    {
        $user = Auth::user();
        $address = Address::where('userID', '=', $user->id)->first();
        return view('users')->with([
            'user' => $user,
            'address' => $address
        ]); 
    }

    public function avatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $address = Address::where('userID', '=', $user->id)->first();
        return view('users')->with([
            'user' => $user,
            'address' => $address
        ]);
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
        // if (Gate::denies('edit-users')){
        //     return redirect(route('admin.users.index'));
        // }

        $address = Address::where('userID', '=', $user->id)->first();
        return view('admin.users.edit')->with([
            'user' => $user,
            'address' => $address
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

        $address = Address::where('userID', '=', $user->id)->first();

        $address->Country = $request->country;
        $address->City = $request->city;
        $address->Street = $request->street;
        $address->number = $request->number;
        $address->save();
        
        if ($user->save()){
            $request->session()->flash('success', $user->FirstName. ' has been updated');
        } else {
            $request->session()->flash('error', 'Error updating user');
        }
        if ($user->role == 'admin'){
            return redirect()->route('admin.users.index');
        } else{
            return redirect()->route('profile.index');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // if (Gate::denies('delete-users')){
        //     return redirect(route('admin.users.index'));
        // }
        // $user = User::where('id', '=', $id)->first();
        // $address = Address::where('userID', '=', $user->id)->first();
        // $address->delete();
        // $user->delete();
        // return redirect()->route('admin.users.index');
    }
}
