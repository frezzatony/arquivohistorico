<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{

    public function show()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }
    
    public function forgotPassWordShow(Request $request){
        
        
        return view('auth.forgot-password');
            
    }
    
    
    public function forgotPassword(Request $request){
        
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
        
        
        
    }
    
    public function login(AuthRequest $request)
    {
        
        $arrErrors = [];
        try{
            
            $rules = [
                'username'  => 'required',
                'password'  => 'required',
            ];
            
                                    
            $request->validate($rules);
            
            
        }catch (\Illuminate\Validation\ValidationException $e) {
             
             return redirect()->back()->withInput()->withErrors($arrErrors);
                 
        }
        
        //pesquisa usuário pelo cpf ou pelo username
        $user = User::where('cpf', $request->username)->orWhere('username',$request->username)->first();
        
        if (!$user){
            return redirect()->back()->withInput()->withErrors(['Credenciais inválidas']);
        }
        
        
        //autentica usuário
        if (Auth::attempt(['cpf'=>$user->cpf,'password'=>$request->password])) {
                        
            return redirect()->route('dashboard');
        }
        
        //autenticacao falou
        return redirect()->back()->withInput()->withErrors(['Credenciais inválidas']);
       
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
    
    
}
