<?php

class Lights extends HomeChecker {

    public function check(Home $home){
        if(!$home->lightOff){
            echo "Lights are still on. \n";
        }

        $this->next($home);
    }
}