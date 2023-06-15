<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AgendaSingleController extends Controller {
	public function searchById($id) {
		$sessions = json_decode(file_get_contents(storage_path() . "/data/sessions.json"), true);
        $groupedSessions = [];

        foreach ($sessions as $day) {
            $dayGroup = $day['groupName'];
            foreach ($day['sessions'] as $session) {
                $id = $session['id'];
                $groupedSessions[$id] = $session;
            }
        }

		$result = array_filter($groupedSessions, function ($object) use ($id) {
            return $object['id'] == $id;
        });

        if (!empty($result)) {
            $session = $result;
            $title = 'MSCC — Agenda';

            foreach($session as $s) {
                $title = $title . " | " . $s['title'];
                break; 
            }

		    return view('agendaSingle', compact('session', 'groupedSessions', 'title'));
        }
        if (empty($result)) {
            return response()->json(['message' => 'Object not found'], 404);
        }
  	}
}
