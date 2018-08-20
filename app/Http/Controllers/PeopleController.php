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

        $user = $this->user;
        $topic = $this->set_topic($mis_id);
        $progresses = $this->get_progress_data($topic);


        setting(['maintenance_mode' => 'test'])->save();
        var_dump(setting('clidebar_links'));


        // foreach($progresses as $progress) {
        //     var_dump($progress->reviews[0]);
        // }
        

    	return view('people', [
    		'user' 		=> $user,
    		'topic' 	=> $topic,
    		'foo' 		=> 'bar',
            'controller_name' => $this->controller_name(),
            'notify' => $user->last_active <= date("Y-m-d", strtotime("-2 day")),
            'aspiration' => $this->get_aspiration($topic),
            'progress_bar' => $this->get_progress_data($topic)
    	]);
    }

    /**
     * @param object $topic
     *
     * @return object
     */
    public function get_aspiration($topic) {

        return $topic->aspirations()->orderBy('id', 'desc')->first() ? $topic->aspirations()->orderBy('id', 'DESC')->first()->aspiration : NULL;
    }

    /**
     * @param object $topic
     *
     * @return array
     */
    public function get_progress_data($topic) {

        $progresses =  count($topic->progresses()->where('course_status', 'Active')->get()) == 0 ? NULL : $topic->progresses()->where('course_status', 'Active')->orderBy('course_type', 'ASC')->orderBy('course_title', 'ASC')->get();

        if($progresses){
            foreach($progresses as $progress) {
                $progress->initial = $progress->initial_reviews()->orderBy('id', 'DESC')->first();
                $progress->reviews = $progress->progress_reviews()->orderBy('number', 'ASC')->get();
            }            
        }
        return $progresses;
    }

    public function search() {

        return view('people/cl_search');
    }

    // NOT USED
    public function get_reviews($progress) {

        $data = [];

        $progress->reviews = $progress->progress_reviews()->orderBy('number', 'ASC')->get();

        foreach($progress->reviews as $review) {

            $key = $review->number;
            $data[$key] = $review;
        }
    }

}
