<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;



    protected $table = 'todolist';


    protected $primaryKey ='todo_id';



    protected $fillable = ['activity'];



    public $timestamps = false;
}
