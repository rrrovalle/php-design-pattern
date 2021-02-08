<?php

class LogToFile implements Logger {

    public function log($data){
        echo "${data}: Log to the file. \n";
    }
}