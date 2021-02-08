<?php

class LogToDatabase implements Logger {

    public function log($data){
        echo "${data}: Log to the database. \n";
    }
}