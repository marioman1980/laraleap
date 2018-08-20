<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Ebs\Ebs_test;
use App\Models\Ebs\Person;

class EbsController extends BaseController
{
    public function __construct() {

    }

    // public function index() {

    //     $ebs = new Ebs_test;
    //     $test = $ebs->oracle_test();
    //     var_dump($test); 
    // }

    public function index() {

        $person = new Person;
        $person = $person->get(30141843);
        var_dump($person); 
    }    
}
