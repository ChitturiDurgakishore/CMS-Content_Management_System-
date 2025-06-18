<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table="footersociallinks";
    protected $fillable=['id','name','url','visibility'];
    public $timestamps=false;
}
