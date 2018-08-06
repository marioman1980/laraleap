<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends Model
{



    public static function get($identifier) {

    	$person = Person::where('mis_id', $identifier)
    					->orWhere('username', $identifier)->first();
    	$person->full_name = $person->forename.' '.$person->surname;

    	return $person;
    }

    public static function is_admin($person_id) {

        $admin_users = DB::table('settings')->where('var', 'admin_users')->first(['value']);

        return strpos($admin_users->value, "'".$person_id."'") == true ? true : false;
        // return strpos($admin_users->row()->value, "'".$person_id."'") == true ? true : false;
    }    

}
