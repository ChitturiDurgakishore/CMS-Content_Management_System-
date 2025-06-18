<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisteredUsers extends Model
{
   protected $table="registeredusers";
   protected $fillable=['name','email','phone','password'];
}
