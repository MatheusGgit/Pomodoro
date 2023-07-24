<?php

namespace App\Http\Controllers;

use DateInterval;
use DateTime;
use Ramsey\Uuid\Type\Time;

class Timer extends Controller
{
    public function getTime(){
        date_default_timezone_set('America/Sao_Paulo');
        $dateTime = new DateTime();
        $stamp = $dateTime->format('Y-m-d H:i:s');
        return view("index", ["stamp"=>$stamp]);
    }
    public function addTime(){
        date_default_timezone_set('America/Sao_Paulo');
        $minutes_to_add = 20;
        $dateTime = new DateTime();
        $dateTime->add(new DateInterval('PT' . $minutes_to_add . 'M'));
        $stamp = $dateTime->format('Y-m-d H:i:s');
        return view("index", ["stamp"=>$stamp]);
    }
}
