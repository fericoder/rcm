<?php

namespace App\Http\Controllers\Auth;

use App\Complex;
use App\User;
use App\Http\Controllers\Controller;
use App\Website;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/dashboard/configuration';

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
            'fullNameReg' => ['required', 'max:25'],
            'mobileReg' => ['nullable', 'numeric', 'digits:11','unique:users,mobile'],
            'complex_nameReg' => ['required', 'string', 'min:3','max:50'],
            'emailReg' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'passwordReg' => ['required', 'string', 'min:4', 'confirmed'],
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
        $complex = Complex::create([
            'name' => $data['complex_nameReg'],
        ]);

        $website = Website::create([
            'complex_id' => $complex->id,
        ]);


        return User::create([
            'fullName' => $data['fullNameReg'],
            'mobile' => $data['mobileReg'],
            'complex_id' => $complex->id,
            'email' => $data['emailReg'],
            'password' => Hash::make($data['passwordReg']),
        ]);
    }
}
