<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pettyCash;
use SebastianBergmann\CodeCoverage\Driver\Driver as DriverDriver;

class agentController extends Controller
{


    public function home(){

        $data=pettyCash::all();
        $count = User::all()->count();
        $approved = pettyCash::where('status', 'Approved')->count();
        $deny = pettyCash::where('status', 'deny')->count();
        $progress = pettyCash::where('status', 'In Progress')->count();


        return view('agent.home', ['data'=>$data], compact('count','approved','progress','deny'));

    }

    public function agenteditprofile(){

        return view('agent.agenteditprofile');

    }

    public function agentprofile(){

        return view('agent.agentprofile');

    }


    public function agentcreatepettycash(){


        return view('agent.agentcreatepettycash');

    }

    public function agentpetty(Request $request){

        $request->validate([
            'department' => 'required',
            'date'=>'required',
            'requestedby'=>'required',
            'amount'=>'required|numeric|lt:20001',
            'description'=>'required',
            'company'=>'required',

                ]);


        $dat=new pettyCash;

        $dat->department=$request->department;
        $dat->date=$request->date;
        $dat->requestedby=$request->requestedby;
        $dat->amount=$request->amount;
        $dat->description=$request->description;
        $dat->company=$request->company;

        $dat->save();

        return redirect()->back()->with('message', 'Pettycash created successfully');
    }


    public function agentmanagepettycash($id){


        $data = pettyCash::find($id);

        return view('agent.agentmanagepettycash', ['data'=>$data]);

    }

    public function agentlistpettycash(){

        $data=pettyCash::all();

        return view('agent.agentlistpettycash', ['data'=>$data]);

    }

    public function approve($id){

        $data=pettyCash::find($id);

        $data->status='Approved';

        $data->save();

        return redirect()->back();

    }

    public function deny($id){

        $data=pettyCash::find($id);

        $data->status='deny';

        $data->save();

        return redirect()->back();

    }


    public function approvedlistpettycash(){

        $data=pettyCash::where('status', 'Approved');

        return view('admin.approvedlistpettycash', ['data'=>$data]);

    }


}
