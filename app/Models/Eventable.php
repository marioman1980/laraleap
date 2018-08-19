<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventable extends Model
{
    public function __construct() {

    }

    /*****************************
     *
     * Define relationships
     *
     *****************************/

    public function person() {

        return $this->belongsTo(Person::class);
    } 

	public function events() {
        
        return $this->hasMany(Event::class);
    }    
}
