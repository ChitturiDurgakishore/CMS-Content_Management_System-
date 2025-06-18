<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderNavigation extends Model
{
    protected $table="navigation_links";
    protected $fillable=['name','url','visibility'];
   public $timestamps=false;
}
