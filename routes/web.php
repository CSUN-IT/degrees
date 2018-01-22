<?php

$router->get('/', function () {
    $emails= [
        'rick' => 'rick.covington@csun.edu',
        'son' => 'son.pham@csun.edu',
        'steve' => 'steven.fitzgerald@csun.edu'
    ];
    if(env('APP_ENV') !== 'production') {
        foreach($emails as &$email)
            $email = 'nr_'.$email;
    }
    return view('pages.landing-metaphor',compact('emails'));
});

$router->get('/about/version-history', function () {
   return view('pages.about.version-history');
});