<?php

namespace App\Models\Ebs;

use Illuminate\Database\Eloquent\Model;

class RegisterEvent extends EbsModel
{

    public function __construct() {

    }    

    /*****************************
     *
     * Define relationships
     *
     *****************************/

    public function register_event_details_slots() {
        
        return $this->hasMany(RegisterEventDetailsSlot::class);
    }

    /*****************************
     *
     * Other functions
     *
     *****************************/ 

    public function get() {

        return RegisterEvent::where('ID', 228299)->first();
    }    
}
