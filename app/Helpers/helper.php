<?php

namespace App\Helpers;
class classHelper
{
    public static function convertDateDMY($d, $f)
    {
        $date = date($f, strtotime($d));
        return $date;
    }
}
