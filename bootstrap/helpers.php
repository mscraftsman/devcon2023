

<?php
  
use Carbon\Carbon;
  
/**
 *
 * @return response()
 */
if (! function_exists('convertDateTimeToTime')) {
    function convertDateTimeToTime($dateTimeString)
    {
        $dateTime = new DateTime($dateTimeString);
        return $dateTime->format('H:i');
    }
}

if (! function_exists('generateGridTemplateAreas')) {
    function generateGridTemplateAreas($cellIds)
    {
        $columns = 5;
        $rows = ceil(count($cellIds) / $columns);

        $gridTemplateAreas = '';

        for ($row = 1; $row <= $rows; $row++) {
            $rowStart = ($row - 1) * $columns;
            $rowEnd = $rowStart + $columns - 1;
            $rowCells = array_slice($cellIds, $rowStart, $columns);

            $gridTemplateAreas .= '"' . implode(' ', $rowCells) . '"';
            $gridTemplateAreas .= $row < $rows ? "\n" : "";
        }

        return $gridTemplateAreas;
    }
}

if (! function_exists('calculatePlacement')) {
    function calculatePlacement($session)
    {

        $timeString = $session['startsAt'];
        $room = $session['room'];

        $dateTime = new DateTime($timeString);
        $time = $dateTime->format('H:i');
        $formattedTime = str_replace(':', '', $time);
        $placement = strtolower($room) . '-' . $formattedTime;    

        return $placement;
    }
}

if (! function_exists('calculateTimePlacement')) {
    function calculateTimePlacement($time)
    {
        $formattedTime = str_replace(':', '', $time);
        $placement = 'time' . '-' . $formattedTime;    
        return $placement;
    }
}

if (! function_exists('getSpeakerPicture')) {
    function getSpeakerPicture($id)
    {
		$speakers = json_decode(file_get_contents(storage_path() . "/data/speakers.json"), true);
		$result = array_filter($speakers, function ($object) use ($id) {
            return $object['id'] == $id;
        });

        $photo = '';

        if (!empty($result)) {
            foreach($result as $s) {
                $photo = $s['profilePicture'];
                break; 
            }
        }
        return $photo;
    }
}


if (!function_exists('trimText')) {
    function trimText($text, $maxLength = 80)
    {
        if (strlen($text) > $maxLength) {
            $trimmedText = substr($text, 0, $maxLength - 3) . '...';
        } else {
            $trimmedText = $text;
        }

        return $trimmedText;
    }
}