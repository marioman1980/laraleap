<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
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

    public function progress_reviews() {
        
        return $this->hasMany(ProgressReview::class);
    } 

    public function initial_reviews() {
        
        return $this->hasMany(InitialReview::class);
    } 

    /*****************************
     *
     * Other functions
     *
     *****************************/

    /**
     * @return boolean
     */
    public function show_par_reviews() {

    	return $this->par_type == 'FE' ? true : false;
    }    
}
