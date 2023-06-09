<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
Use App\Models\User;
use App\Rules\ValidStudentID;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        // Check validation - Note : you can change validation as per your requirements 
        $this->validate($request, [
            'nisn' => ['required', new ValidStudentID],   
                      
        ]);

        // Get user record
        $user = User::where('nisn', $request->get('nisn'))->first();
        
        // Set Auth Details
        \Auth::login($user);
        
        // Redirect home page
        if($user->level == 'admin')
        {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('home');
        }
    }
}
