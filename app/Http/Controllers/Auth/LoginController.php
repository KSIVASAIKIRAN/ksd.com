<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Middleware\SessionTimeout;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use Session;
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
    protected $redirectTo = '/';
   // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	//Validate Captcha	
 /* protected function validateLogin(Request $request)
  {
	// dd($request);  
    $this->validate($request, [
      'captcha' => 'captcha',
    ],['captcha.captcha'=>'Invalid Captcha.']); 
	//dd($request); 
  }  */
  
  

  public function login(Request $request) {
	  //dd($request);
	//$request->password = base64_decode($request->password);
	//dd($request->password);
    $this->validateLogin($request);

    // If the class is using the ThrottlesLogins trait, we can automatically throttle
    // the login attempts for this application. We'll key this by the username and
    // the IP address of the client making these requests into this application.
    if ($this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);
        return $this->sendLockoutResponse($request);
    }

    // This section is the only change
    if ($this->guard()->validate($this->credentials($request))) {
        $user = $this->guard()->getLastAttempted();

        // Make sure the user is active
        if ($user->status==1 && $this->attemptLogin($request)) {
            // Send the normal successful login response
			LogActivity::addToLog($user->id,"Success",$user->email);
            return $this->sendLoginResponse($request);
        } else {
            // Increment the failed login attempts and redirect back to the
            // login form with an error message.
			
            $this->incrementLoginAttempts($request);
            return redirect()
                ->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->with('msgstatus','You must be active to login.');
        }
    }

    // If the login attempt was unsuccessful we will increment the number of attempts
    // to login and redirect the user back to the login form. Of course, when this
    // user surpasses their maximum number of attempts they will get locked out.
	LogActivity::addToLog(1,"Fail",$request->email);
    $this->incrementLoginAttempts($request);

    return $this->sendFailedLoginResponse($request);
} 

    protected function authenticated($request, $user)
    {
		//dd($request);
        
    $user->last_seen_at = Carbon::now()->format('Y-m-d H:i:s');
    $user->save();
       
        if($user->hasRole('ROLE_SUPERADMIN')) {
            return redirect('/superadmin');
        }elseif ($user->hasRole('ROLE_SECRETARY')) {
            return redirect('/superadmin');
        }elseif ($user->hasRole('ROLE_PRINCIPAL')) {
            return redirect('/superadmin');
        }elseif ($user->hasRole('ROLE_STUDENT')) {
            return redirect('/studentmanager');
        }
        elseif ($user->hasRole('ROLE_SUPERINTENDENT')) {
            return redirect('/superintendentmanager');
        }  
        elseif ($user->hasRole('ROLE_VC')) {
            return redirect('/vcadmin');
        }  
        elseif ($user->hasRole('ROLE_MD')) {
            return redirect('/mdadmin');
        }

         elseif ($user->hasRole('ROLE_BGADMIN')) {
            return redirect('/bgadmin');
        }
        elseif ($user->hasRole('TSFDC')) {
            return redirect('/tsadmin');
        }
		elseif ($user->hasRole('ROLE_DIVISION')) {
            return redirect('/divisionalmanager');
        }
        else {
            return redirect('/home');
        }		

    }
	public function logout()
    {
		
        Auth::logout();
		//\Cookie::forget('bg_session');
		//\Cookie::queue(\Cookie::forget('first_time'));
		Session::flush();
		//session_unset();
    return redirect('/login');


}

/* public function logout(Request $request) {
    header("cache-Control: no-store, no-cache, must-revalidate");
    header("cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    Session::flush();
    $request->session()->regenerate();
    Session::flash('succ_message', 'Logged out Successfully');
    return redirect('signin');
} */

    
	

}
