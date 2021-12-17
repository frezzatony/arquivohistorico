<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function __construct(){
        
    }
    
    public function index(Request $request){
        
        return view('registration.register',$request->all());
    }
    
    public function store(Request $request)
    {
        
        $arrErrors = [];
        try{
            
            $rules = [
                'name'              => 'required',
                'cpf'               => 'required|unique:users,cpf|cpf',
                'email'             => 'required|email|unique:users,email',
                'password'          => 'required:min:6|max:255',
                'password_confirm'  => 'required:min:6|max:255|same:password',
            ];
            
            $messages = [
                'password_confirm.required' =>  'O campo confirmação de senha deve ser preenchido.',
                'password_confirm.same'     =>  'As senhas não coincidem.',
            ];
                        
            $request->validate($rules,$messages);
        }catch (\Illuminate\Validation\ValidationException $e) {
            $arrErrors = $e->errors(); 
              
        }
        
        if($arrErrors){
            return redirect()->back()->withInput()->withErrors($arrErrors);
        }
        
        $user = new User();
        $user->name = $request->name;
        $user->cpf = preg_replace( '/[^0-9]/', '',$request->cpf);
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
           
        $user->save();
        
        auth()->login($user);
        
        
        return redirect()->route('dashboard');
    }


}
