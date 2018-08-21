<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
   
 public $timestamps = true;	
    
 protected $table = 'farms';


  
public function user()
{
    return $this->belongsTo('App\User');
}



public function catalog()
 {
   return $this->belongsTo('App\Catalog');
 }

}
