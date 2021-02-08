<?php

class Alarm extends HomeChecker {

    public function check(Home $home){
        if(!$home->alarmOn){
            echo "Alarm has not been set. \n";
        }

        $this->next($home);
    }
}