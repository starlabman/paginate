<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'age'];

    // public funtion getIsAdultAttribute() : bool 
    // {
    // 	return  ;
    // }
}
