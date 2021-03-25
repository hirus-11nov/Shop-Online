<?php

namespace App\Http\Controllers\Auth;
use Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
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

    // public function credentials(Request $request){
    //     return ['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'admin'];
    // }
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
        
    // }
    
//facebook
    public function redirect()
    {
       
        return Socialite::driver('facebook')->redirect();
    }
 
    public function Callback()
    {
        try{

            $userSocial =   Socialite::driver('facebook')->stateless()->user();
            $users      =   User::where(['email' => $userSocial->getEmail()])->first();
            // dd($users);
            if($users){
                Auth::login($users);
                //return redirect('home');
                Session::put('user',$users['email']);
                return redirect()->route('home');
            }else{
                $user = User::create([
                    'name'          => $userSocial->getName(),
                    'email'         => $userSocial->getEmail(),
                    'image'         => $userSocial->getAvatar(),
                    'provider_id'   => $userSocial->getId(),
                    
                ]);
           return redirect('home');
            // return Redirect::to(Session::get('home'));
            }
        }
        catch(Exception $e)
        {
                return redirect('auth/facebook');
        }
    }
    //Google
    public function redirectgg()
    {
        // dd($provider);

      //  return Socialite::driver($provider)->redirect();
        return Socialite::driver('google')->redirect();
    }
 
    public function Callbackgg()
    {
        try{

            $userSocial =   Socialite::driver('google')->stateless()->user();
            $users      =   User::where(['email' => $userSocial->getEmail()])->first();
            // dd($users);
            if($users){
                Auth::login($users);
                Session::put('user',$users['email']);
                return redirect()->route('home');
            }else{
                $user = User::create([
                    'name'          => $userSocial->getName(),
                    'email'         => $userSocial->getEmail(),
                    'image'         => $userSocial->getAvatar(),
                    'provider_id'   => $userSocial->getId(),
                    
                ]);
            return redirect('home');
            }
        }
        catch(Exception $e)
        {
                return redirect('auth/google');
        }
    }
}
