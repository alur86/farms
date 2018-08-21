<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
       
 public $timestamps = true;	
    
 protected $table = 'catalogs';



 public function farms()
    {
        return $this->hasMany('App\Farm');
    }




}
