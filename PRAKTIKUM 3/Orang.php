<?php

class Orang{
    protected $nama;

    public function ucapSalam(){
        echo "Halo nama saya" . $this->nama . "<br>";
    }
}