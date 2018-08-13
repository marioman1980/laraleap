<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InitialReview extends Model
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

    public function progress() {

        return $this->belongsTo(Progress::class);
    }   

    /*****************************
	 *
     * Other functions
     *
     *****************************/

    /**
     * @return boolean
     */
    public static function par_enabled($user) {

    	return $user->staff != 1 ? 0 : 1;
    }
}
