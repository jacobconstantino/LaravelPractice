<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity;
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
}
