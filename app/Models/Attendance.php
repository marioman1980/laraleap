<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
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
}
