<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class BaseController extends Controller
{

	public function controller_name(){
		
		if(get_class(request()->route()->controller) == 'App\Http\Controllers\PeopleController') {
			return 'People';
		}
	}	

}