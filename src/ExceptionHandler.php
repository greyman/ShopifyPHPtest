<?php 

namespace App;

/**
* @author Richard Grey <richard@web100.co.uk>
*/

use GuzzleHttp\Exception\BadResponseException;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ExceptionHandler 
{

	/**
     * Handles any exception and redirects back to the form with the error message.
     *
     * @param BadResponseException
     *
     * @return Response
     */

	public static function handle(BadResponseException $exception)
	{
		$response = $exception->getResponse();
    	$responseBodyAsString = $response->getBody()->getContents();

    	(new RedirectResponse("http://localhost:8000/error.php?error=$responseBodyAsString"))->send();;
	}
}