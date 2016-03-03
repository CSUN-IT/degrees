<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Controllers\Controller;

use App\Models\Degree;
use App\Models\Person;

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
    	$person = Person::with('degrees')
            ->where('email', $email)
            ->first();

		// send the response
		return $this->sendResponse($person);
    }
}
