<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PeopleController extends BaseController
{
    public function __construct() {

    }

    public function index() {

    	return redirect('/people/30141843');

    }

    /**
     * Returns some stuff
     * @param integer $mis_id
     * @return array
     */
    public function show($mis_id) {

    	$user = Person::get(30141843);
    	$user->admin = Person::is_admin($user->id);
        $user->affiliation  = $user->staff ? 'staff' : 'student';
    	$topic = Person::get($mis_id);




    	return view('people', [
    		'user' 		=> $user,
            // 'person'    => $person,
    		'topic' 	=> $topic,
    		'foo' 		=> 'bar',
            'controller_name' => $this->controller_name()
    	]);

    }
}
