<?php

trait Weight{
    public $weight;

    public function getWeight(){
        return "Weight: " . $this->weight . "kg";
    }
}