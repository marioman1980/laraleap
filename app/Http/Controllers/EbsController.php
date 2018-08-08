<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebs_test;

class EbsController extends BaseController
{
    public function __construct() {

    }

    public function index() {

        $ebs = new Ebs_test;
        $test = $ebs->oracle_test();
        var_dump($test); 
    }
}
