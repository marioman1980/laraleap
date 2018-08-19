<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
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

    public function eventable() {

        return $this->belongsTo(Eventable::class);
    }   

	public function targets() {
        
        return $this->hasMany(Target::class);
    }

    public function notifications() {
        
        return $this->hasMany(Notification::class);
    }      
}
