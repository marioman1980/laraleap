<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressReview extends Model
{
    public function __construct() {

    }

    /*****************************
     *
     * Define relationships
     *
     *****************************/

    public function Person() {

        return $this->belongsTo(Person::class);
    } 

    public function Progress() {

        return $this->belongsTo(Progress::class);
    }     
}
