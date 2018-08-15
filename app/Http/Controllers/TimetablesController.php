<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimetablesController extends BaseController
{

    public function index() {
    	
    	$user = $this->user;
    	$topic = Person::get($mis_id);

    	return view('timetables', [
    		'user' => $user,
    		'topic' => $topic
    	]);
    }
}
