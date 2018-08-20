<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class BaseController extends Controller
{
	public function __construct() {

    	$this->user = Person::get(30141843);
    	$this->user->admin = $this->user->is_admin($this->user->id);
        $this->user->affiliation = $this->user->staff ? 'staff' : 'student';		

        \View::share('user', $this->user);
	}

	/**
	 * @return string
	 */
	public function controller_name(){
		
		if(get_class(request()->route()->controller) == 'App\Http\Controllers\PeopleController') {
			return 'People';
		}
		else if (get_class(request()->route()->controller) == 'App\Http\Controllers\TimetablesController') {
			return 'Timetables';
		}
	}

	/**
	 * @param integer $id
	 *
	 * @return object
	 */
	public function set_topic($id){
		
		if(get_class(request()->route()->controller) == 'App\Http\Controllers\PeopleController') {
			return Person::get($id);
		}
		else if(get_class(request()->route()->controller) == 'App\Http\Controllers\CoursesController') {
			return Course::get($id);
		}
		else {
			return Person::get($id);
		}
	}

	/**
	 * @return date()
	 */
	public function date() {

		if(date('w') == 1) {
			return date('d F Y');
		}
		else {
			return date('d F Y', strtotime('previous monday', strtotime($date)));
		}
	}

}