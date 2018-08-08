<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends BaseModel
{
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
    public static function is_admin($person_id) {

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

}
