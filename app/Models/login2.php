<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login2 extends Model
{
    use HasFactory;

    
    protected $table = 'login2';

    protected $primaryKey = 'login_id2';

    protected $fillable  = ['username','password'];


    public $timestamps = false;



    public function userdetails2(){

    	return $this->hasOne('App\Models\userdetails2','login_id2');
    }
    
}
