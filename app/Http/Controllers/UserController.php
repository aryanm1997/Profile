<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Validation\ValidationException;
class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
        
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'number' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        
        $data = $request->all();
        $check = $this->create($data);
         return view("login");
    }

    public function create(array $data)
    {
      return User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'number' => $data['number'],
        'email' => $data['email'],
        'date' => $data['date'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            
        $data = User::where('id',Auth::user()->id)->first();
            return view('dashboard',compact('data'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}