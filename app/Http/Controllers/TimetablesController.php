<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimetablesController extends BaseController
{

    /**
     * @param integer $mis_id
     *
     * @return array
     */
    public function index($mis_id) {
    	
    	$user = $this->user;
    	$topic = $this->set_topic($mis_id);

    	return view('timetables', [
    		'user' => $user,
    		'topic' => $topic,
    		'controller_name' => $this->controller_name(),
            'date' => $this->date()
    	]);
    }
}
