<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Ebs\Ebs_test;
use App\Models\Ebs\RegisterEvent;
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

    // public function index() {

    //     $test = new Person;
    //     $test = $test->get(30141843);
    //     var_dump($test); 
    // }   

    public function index() {

        $test = new RegisterEvent;
        var_dump(get_class($test));
        // var_dump($test->register_event_details_slots());
        $test = $test->get();
        var_dump($test->register_event_details_slots());
    }        
}
