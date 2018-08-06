<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PeopleController extends Controller
{
    public function __construct() {

    }

    public function index() {

    	return redirect('/people/30141843');

    }

    public function show($mis_id) {

    	$user = Person::get(30141843);
    	$user->admin = Person::is_admin($user->id);
    	$person = Person::get($mis_id);



    	return view('test', [
    		'user' 		=> $user,
    		'person' 	=> $person,
    		'foo' 		=> 'bar'
    	]);

    }
}
