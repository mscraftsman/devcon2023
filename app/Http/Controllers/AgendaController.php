<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AgendaController extends Controller {
	public function index() {
		$title = 'MSCC — Agenda';
		$sessions = json_decode(file_get_contents(storage_path() . "/data/sessions.json"), true);
        $groupedSessions = [];

        foreach ($sessions as $day) {
            $dayGroup = $day['groupName'];
            foreach ($day['sessions'] as $session) {
                $room = $session['room'];
                $groupedSessions[$dayGroup][$room][] = $session;
            }
        }

        // foreach ($groupedSessions as &$roomSessions) {
        //     usort($roomSessions, function ($a, $b) {
        //         return strtotime($a['startsAt']) - strtotime($b['startsAt']);
        //     });
        // }

		return view('agenda', compact('groupedSessions', 'title'));	
  	}
}
