<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Address;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'FirstName' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
            $user = new User;
            $user->FirstName = $data['FirstName'];
            $user->LastName = $data['LastName'];
            $user->email = $data['email'];
            if ($data['role'] === 'A455'){
                $user->role = 'admin';
            } else {
                $user->role = 'user';
            }
            $user->password = Hash::make($data['password']);
            $user->save();

            $address = new Address;
            $address->userID = $user->id;
            $address->country = $data['country'];
            $address->city = $data['city'];
            $address->street = $data['street'];
            $address->number = $data['number'];
            $address->save();
            return $user;
       
            // return User::create([
            //     'FirstName' => $data['FirstName'],
            //     'LastName' => $data['LastName'],
            //     'email' => $data['email'],
            //     'role' => 'user',
            //     'password' => Hash::make($data['password'])
            // ]);  
    }

}
