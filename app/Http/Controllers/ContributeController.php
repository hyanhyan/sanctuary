<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContributeController extends Controller
{
    public function contribute(){
         $user = User::where('id', Auth::user()->getId())
            ->first();
        return view('contributors',compact('user'));
    }
}