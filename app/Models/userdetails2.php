<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdetails2 extends Model
{
    use HasFactory;


    protected $table ='userdetails2';

    protected $primaryKey='userdetails_id2';


    protected $fillable = ['login_id2','name','email'];


    public $timestamps = false;
    




    public function login2(){

    	return $this->belongsTo('App\Models\login2','login_id2');
    }


}
