<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\pettyCash;

class HomeController extends Controller
{
    public function index(){



        if(!Auth::User()) {

            return view('auth.login');

            }

    elseif(Auth::User()->role=='admin'){

            $data=pettyCash::all();
            $count = User::all()->count();
            $approved = pettyCash::where('status', 'Approved')->count();
            $deny = pettyCash::where('status', 'deny')->count();
            $progress = pettyCash::where('status', 'In Progress')->count();


        return view('admin.dashboard', ['data'=>$data], compact('count','approved','progress','deny'));

        } elseif (Auth::User()->role =='agent') {

            $data=pettyCash::all();
            $count = User::all()->count();
            $approved = pettyCash::where('status', 'Approved')->count();
            $deny = pettyCash::where('status', 'deny')->count();
            $progress = pettyCash::where('status', 'In Progress')->count();


        return view('agent.home', ['data'=>$data], compact('count','approved','progress','deny'));

        }



}
}

