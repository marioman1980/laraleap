<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    public function __construct() {

    }

    /*****************************
	 *
     * Define relationships
     *
     *****************************/

    public function user() {

        return $this->belongsTo(Person::class);
    }    
  
}
