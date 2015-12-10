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
    	$person = Person::where('email', $email)->first();
    	if(!empty($person)) {
    		$degrees = Degree::where('individuals_id', $person->individuals_id)
                ->where('is_displayed', '1')
    			->orderBy('year', 'DESC')
    			->get();
    	}
    	else
    	{
    		$degrees = new Collection();
    	}

    	// convert the collection to an array for use in returning the
		// desired response as JSON
		$data = $degrees->toArray();

		// send the response
		return $this->sendResponse($data);
    }
}
