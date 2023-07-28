<?php

namespace App\Http\Controllers;

use DateInterval;
use DateTime;

class Timer extends Controller
{
    public function getTime(int $minutes_to_add){
        date_default_timezone_set('America/Sao_Paulo');
        $dateTime = new DateTime();
        $dateTime->add(new DateInterval('PT' . $minutes_to_add . 'M'));
        $stamp = $dateTime->format('Y-m-d H:i:s');
        return $stamp;
    }

    public function Time(){
        return view("index", ["stamp"=>$this->getTime(0)]);
    }

    public function addTime(int $m){
        return view("index", ["stamp"=>$this->getTime($m)]);
    }

    public function config(){
        return view("config", ["stamp"=>$this->getTime(0)]);
    }

    public function editName(){
        return view("config", ["stamp"=>$this->getTime(0)]);
    }

    public function defineTime(){
        return view("defineTime", ["stamp"=>$this->getTime(0)]);
    }
}
