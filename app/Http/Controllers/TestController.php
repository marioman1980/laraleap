<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspiration;

class TestController extends BaseController
{

    public function index() {

        // echo 'foo';

    	echo(Aspiration::get(114931)->aspiration);
    }

}
