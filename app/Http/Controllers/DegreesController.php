<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class DegreesController extends Controller
{
	/**
	 * Returns the degrees held by an individual with the email address
	 * specified as a query parameter.
	 *
	 * @return Response
	 */
    public function getDegrees(Request $request) {
    	$email = $request->get('person');

    	// grab all degrees with the matching individual
    	$person = Person::with(['degrees' => function($q) {
            $q->orderBy('year', 'ASC');
        }])
        ->where('email', $email)
        ->first();

		// send the response
		return $this->sendResponse($person);
    }
}
