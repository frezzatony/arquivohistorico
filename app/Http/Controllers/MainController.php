<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class MainController extends Controller
{
    public function index(Request $request)
    {
       
         $user = Auth::user();
         
         $arrData = [
            'isAdmin'   =>  $user->can('isAdmin',$user),
         ];
         

         
         return view('dashboard',$arrData);
    }
}
