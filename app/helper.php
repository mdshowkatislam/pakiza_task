<?php
use Carbon\Carbon;



if (!function_exists('convertDateDMY')) {
    function convertDate($date, $format)
    {
        $date = Carbon::createFromFormat('Y-m-d', $date)->format($format);
        return $date;
    }
}
