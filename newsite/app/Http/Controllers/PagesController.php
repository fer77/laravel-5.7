<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
        {
                return view('welcome', [
                    'name' => 'Bob',
                    'tasks' => [
                        'Go to store',
                        'Go to school',
                        'Go to work'
                    ],
                ]);
                // Same as:
                // return view('welcome')->withTasks($tasks)->withFoo('foo');
                // or
                // return view('welcome', [
                //     'tasks' => $tasks
                // ]);
        }
        public function about()
        {
            return view('about');
        }

        public function contact()
        {
            return view('contact');
        }
}
