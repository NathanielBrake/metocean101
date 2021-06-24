<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
     * Show Login form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Admin user login
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('web.site.data'));
        }

        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);

        // if unsuccessful, then redirect back to the login with the form data
        return redirect('login')->withInput($request->only('email', 'remember'));
    }

    /**
     * Users logout
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'web.site.home' ));
    }
    public function username() {
        return 'email';
    }

//    public function testLogin()
//    {
//        $user = new User;
//        $user->name = 'Nathaniel';
//        $user->email = 'nathaniel.brake@gmail.com';
//        $user->password = Hash::make('test1234');
//
//        if ( ! ($user->save()))
//        {
//            dd('user is not being saved to database properly - this is the problem');
//        }
//
//        if ( ! (Hash::check('test1234', Hash::make('test1234'))))
//        {
//            dd('hashing of password is not working correctly - this is the problem');
//        }
//
//        if ( ! (Auth::attempt(array('email' => 'nathaniel.brake@gmail.com', 'password' => 'test1234'))))
//        {
//            dd('storage of user password is not working correctly - this is the problem');
//        }
//
//        else
//        {
//            dd('everything is working when the correct data is supplied - so the problem is related to your forms and the data being passed to the function');
//        }
//    }
}
