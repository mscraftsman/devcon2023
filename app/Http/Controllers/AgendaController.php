<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AgendaController extends Controller {
	public function index() {
		$title = 'MSCC — Agenda';
		$sessions = json_decode(file_get_contents(storage_path() . "/data/sessions.json"), true);
        $groupedSessions = [];
        $groupedSessionsBySlot = [];

        foreach ($sessions as $day) {
            $dayGroup = $day['groupName'];
            foreach ($day['sessions'] as $session) {
                $room = $session['room'];
								$id = $session['id'];
                $groupedSessions[$dayGroup][$id] = $session;
            }
        }

				$roomNames = ['andromeda', 'pandora', 'titan', 'tatooine'];
				$time_range = [
					'08:00',
					'09:00',
					'10:00',
					'11:00',
					'12:00',
					'13:00',
					'14:00',
					'15:00',
					'16:00',
					'17:00'
				];

				$cellIds = [];
				foreach ($time_range as $time) {
						foreach ($roomNames as $room) {
								$cellIds[] = $room . '-' . str_replace(':', '', $time);
						}
				}

				return view('agenda', compact('groupedSessions', 'title', 'cellIds'));	
  	}
}
