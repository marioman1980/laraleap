<?php

namespace App\Models\Ebs;

use Illuminate\Database\Eloquent\Model;

class RegisterEventDetail extends EbsModel
{

    public function __construct() {

    }    

    /*****************************
     *
     * Define relationships
     *
     *****************************/

    public function register_event() {

        return $this->belongsTo(RegisterEvent::class);
    }      

    public function register_event_details_slots() {
        
        return $this->hasMany(RegisterEventDetailsSlots::class);
    }
}
