<?php


class Sorcier extends Personnage{

    public function __construct(){
        $this->x = 125;
        $this->y = 125;
        parent::__construct();
    }
}