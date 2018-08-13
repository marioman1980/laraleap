<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaseModel extends Model
{
    public function __construct() {

    }

	/**
	 * @return string
	 */
	public function kind_of(){
		
		if(get_class($this) == 'App\Models\Person') {

			return 'Person';
		}
		elseif(get_class($this) == 'App\Models\Course') {
			
			return 'Course';
		}
	}
}