<?php

abstract class HomeChecker implements Handler {
    
    protected $successor;

    public abstract function check(Home $home);

    public function successor(HomeChecker $successor){
        $this->successor = $successor;
    }

    public function next(Home $home){
        if($this->successor){
            $this->successor->check($home);
        }
    }

}