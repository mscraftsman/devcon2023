<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SpeakersController extends Controller {
	public function index() {
			try {
				// Make a GET request to the external API
				$response = Http::get('https://sessionize.com/api/v2/aixl6xmi/view/Speakers');

				// Check if the request was successful
				if ($response->successful()) {
					// Get the data from the response
					$speakers = $response->json();
					return view('speakers', compact('speakers'));
				}
				
				throw new \Exception('Failed to fetch speakers.');
				
			} catch (\Exception $e) {
				// Handle the exception and pass an error message to the view
				$error = $e->getMessage();
				return view('speakers', compact('error'));
			}
  }
}
