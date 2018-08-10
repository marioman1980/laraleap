<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends BaseModel
{

    public function __construct() {

    }

    /*****************************
     *
     * Define relationships
     *
     *****************************/

    public function aspirations() {
        
        return $this->hasMany(Aspiration::class);
    }

    public function progresses() {
        
        return $this->hasMany(Progress::class);
    }  

    public function progress_reviews() {
        
        return $this->hasMany(ProgressReview::class);
    }

    public function initial_reviews() {
        
        return $this->hasMany(InitialReview::class);
    } 

    public function attendances() {
        
        return $this->hasMany(Attendance::class);
    }  

    /*****************************
     *
     * Other functions
     *
     *****************************/                  

    /**
     * @param integer or string
     *
     * @return object
     */
    public static function get($identifier) {

    	$person = Person::where('mis_id', $identifier)
    					->orWhere('username', $identifier)->first();
    	$person->full_name = $person->forename.' '.$person->surname;
    	return $person;
    }

    /**
     * @param integer
     *
     * @return boolean
     */
    public function is_admin($person_id) {

        $admin_users = DB::table('settings')->where('var', 'admin_users')->first(['value']);
        return strpos($admin_users->value, "'".$person_id."'") == true ? true : false;
    }    

    /**
     * @param object
     */
    public function get_photo($person) {

        if($person->photo) {

            return "data:image/png;base64,".base64_encode($person->photo);
        }
    }

    /**
     * @return string
     */
    public function full_address() {

        $address = str_replace("-", "", (str_replace("---", "", $this->address)));
        $full_address = $address.', '.$this->town.', '.$this->postcode;
        return $full_address;
    }

    /**
     * @return integer
     */
    public function age() {

        return date_diff(date_create($this->date_of_birth), date_create('now'))->y;
    }

    public function get_attendance($course_type) {

        return DB::table('attendances')->where('course_type', $course_type)->where('person_id', $this->id)->orderBy('id', 'DESC')->first();
    }

}
