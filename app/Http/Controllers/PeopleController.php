<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PeopleController extends BaseController
{

    public function index() {

    	return redirect('/people/30141843');
    }

    /**
     * @param integer $mis_id
     *
     * @return array
     */
    public function show($mis_id) {

    	$user = Person::get(30141843);
    	$user->admin = $user->is_admin($user->id);
        $user->affiliation  = $user->staff ? 'staff' : 'student';
    	$topic = Person::get($mis_id);

    	return view('people', [
    		'user' 		=> $user,
    		'topic' 	=> $topic,
    		'foo' 		=> 'bar',
            'controller_name' => $this->controller_name(),
            'notify' => $user->last_active <= date("Y-m-d", strtotime("-2 day"))
    	]);

    }

}
