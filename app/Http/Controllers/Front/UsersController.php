<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>
            ['users']
        ]);
    }

    public function users(){
        $arr = [];
        $arr['data'] = 'info array';
        return view('home.home',compact('arr'));
    }
}
