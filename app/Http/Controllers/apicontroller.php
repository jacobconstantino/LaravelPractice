<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity;
use App\Models\userdetails2;
use App\Models\login2;
class apicontroller extends Controller
{
    public function activitytodolist(Request $request){
    	$this->validate($request,[
    		'activity' => 'required'
    	]);


    	$create = activity::firstOrCreate([
    		'activity' => $request->get('activity')

    	]);


    	$create->save();


    	return response()->json($create);

    }


    public function getactivity(){
         $data = activity::orderBy('todo_id','desc')->get();


       return response()->json($data);

    	
    }

    public function specificdata($id){

    	$data = activity::find($id);


    	return response()->json($data);
    }
}
