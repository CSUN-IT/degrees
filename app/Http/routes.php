<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('degrees', 'DegreesController@getDegrees');

$app->get('/', function () {
    $emails= [
        'rick' => 'rick.covington@csun.edu',
        'son' => 'son.pham@csun.edu',
        'steve' => 'steven.fitzgerald@csun.edu'
    ];
    if(env('APP_ENV') === 'local') {
        foreach($emails as &$email)
        $email = 'nr_'.$email;
    }
	return view('pages.landing-metaphor',compact('emails'));
});
