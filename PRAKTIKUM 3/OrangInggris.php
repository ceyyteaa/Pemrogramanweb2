<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    // Override
    public function ucapSalam(){
        echo "hello my name is" . $this->nama . "<br>";
    }
}