<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class BaseController extends Controller
{
	public function __construct() {

    	$this->user = Person::get(30141843);
    	$this->user->admin = $this->user->is_admin($this->user->id);
        $this->user->affiliation  = $this->user->staff ? 'staff' : 'student';		
	}

	/**
	 * @return string
	 */
	public function controller_name(){
		
		if(get_class(request()->route()->controller) == 'App\Http\Controllers\PeopleController') {
			return 'People';
		}
	}	

}