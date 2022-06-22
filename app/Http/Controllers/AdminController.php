<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Helpers\Helper;
use App\Models\createPettyCash;
use App\Models\pettyCash;
use SebastianBergmann\CodeCoverage\Driver\Driver as DriverDriver;

class AdminController extends Controller
{

    public function editprofile(){

        return view('admin.editprofile');

    }

    public function profile(){

        return view('admin.profile');

    }

    public function dashboard(){

        $data=pettyCash::paginate(4);
        $count = User::all()->count();
        $approved = pettyCash::where('status', 'Approved')->count();
        $deny = pettyCash::where('status', 'deny')->count();
        $progress = pettyCash::where('status', 'In Progress')->count();






        return view('admin.dashboard', ['data'=>$data], compact('count','approved','progress','deny'));

    }

    public function users(){

        $data=User::all();

        return view('admin.users', ['data'=>$data]);

    }


    public function createuser(){

        return view('admin.createuser');

    }

    public function adduser(Request $request){

        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required'
                ]);

        $dat=new User;

        $dat->name=$request->name;
        $dat->email=$request->email;
        $dat->role=$request->role;
        $dat->password=bcrypt ($request->password);

        $dat->save();

         return redirect()->back()->with('message', 'User successfully added');


    }


    public function updateuser($id)
    {
            $data=user::find($id);
            return view('admin.updateuser', ['data'=>$data]);
    }

    public function updatua(Request $request, $id){

        $data = User::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->role=$request->role;

        $data->save();

        return redirect()->back()->with('message', 'User Updated successfully');


    }


    public function createpettycash(){


        return view('admin.createpettycash');

    }

    public function addpettycash(Request $request){

        $request->validate([
            'department' => 'required',
            'date'=>'required|date',
            'requestedby'=>'required',
            'amount'=>'required|numeric|lte:20000',
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


    public function managepettycash($id){


        $data = pettyCash::find($id);

        return view('admin.managepettycash', ['data'=>$data]);

    }

    public function listpettycash(){

        $data= pettyCash::paginate(4);

        return view('admin.listpettycash', ['data'=>$data]);

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


    // public function updatepark($id)
    // {

    //     $dat =DB::table('users')->where('role','=','vendor')->get();

    //         $data=parks::find($id);
    //         return view('admin.updatepark', ['data'=>$data], ['$dat'=>$dat]);
    // }

    // public function updateprk(Request $request, $id){

    //     $data=new parks;

    //     $data->name=$request->name;
    //     $data->user_id=$request->user_id;
    //     $data->size=$request->size;
    //     $data->city=$request->city;
    //     $data->lga=$request->lga;
    //     $data->address=$request->address;

    //     $data->save();

    //     return redirect()->back();
    // }

}
