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

    /*****************************
     *
     * Other functions
     *
     *****************************/

    /**
     * @return string
     */
    public function ragp_desc() {

        if ($this->level == 'purple') return "Consistently achieving at least one grade above target";
        elseif ($this->level == 'green') return "On target and making expected progress";
        elseif ($this->level == 'amber') return "One grade below target";
        elseif ($this->level == 'red') return "Two grades below target";
    }


}
