<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity;
use App\Models\userdetails2;
use App\Models\login2;
class todolist extends Controller
{
    

    public function activitytodolist(Request $request){
    	$this->validate($request,[
    		'activity' => 'required'
    	]);


    	$create = activity::firstOrCreate([
    		'activity' => $request->get('activity')

    	]);


    	$create->save();


    	return redirect('/activity');

    }


    public function activityget(){
         $data = activity::orderBy('todo_id','desc')->get();


       return view('layout.activity',compact('data'));

    	
    }


    public function index(){

        return view('welcome');

    }

    public function editpage($id){

      $edit =activity::find($id);


      return view('layout.edit',compact('edit'));

    }

    public function editspecific(Request $request){



        $edit = activity::find($request->get('todo_id'));

        $edit->activity = $request->get('activity');


        $edit->save();


        return redirect('/activity');
    }

    public function delete($id){

        $delete = activity::find($id);

        $delete->delete();


        return redirect('/activity');
    }

    public function user(){

        $user = userdetails2::with('login2')->orderBy('userdetails_id2','desc')->get();

        return view('layout.user',compact('user'));
    }

    public function createuser(Request $request){
        $this->validate($request,[
            'fullname' => 'required',
            'email' => 'required',
            'password'=> 'required'

        ]);


        $creatuser = userdetails2::firstOrCreate([
            'name' => $request->get('fullname'),
            'email' => $request->get('email')

        ])->login2()->associate(login2::firstOrCreate([
            'username' => $request->get('email'),
            'password' => $request->get('password')
        ]));


        $creatuser->save();


        return redirect('/user');


    }
}
