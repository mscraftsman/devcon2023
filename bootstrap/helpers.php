

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
        $columns = 4;
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
