<?php

class Locks extends HomeChecker {

    public function check(Home $home) {
        if (!$home->locked) {
            echo "Doors are open. \n";
        }

        $this->next($home);
    }
}
