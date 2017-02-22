<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Country;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Lang;
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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'username'      => 'required|max:255|unique:users',
            'email'         => 'required|email|max:255|unique:users',
            'password'      => 'required|min:6|confirmed',
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            'user_org'      => 'required|max:255',
            'user_title'    => 'required',
            'user_postaddr' => 'required',
            'user_country'  => 'required',
            'user_research' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username'      => $data['username'],
            'email'         => $data['email'],
            'password'      => $data['password'],
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'user_org'      => $data['user_org'],
            'user_title'    => $data['user_title'],
            'user_postaddr' => $data['user_postaddr'],
            'user_country'  => $data['user_country'],
            'user_research' => $data['user_research'],
            'user_sysop'    => 0,
        ]);
    }

    public function showRegistrationForm(){
        $countries = Country::lang(Lang::getLocale())->get();
        return view('auth.register',['countries' => $countries]);
    }
}
