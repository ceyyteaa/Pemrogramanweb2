<?php 

class Visibility{
    public $public;
    private $private;
    protected $protected;

    function tampilkanProperty(){
        echo "Ini diakses di dalam kelas <br>";
        echo "Public : " . $this->public . '<br>';
        echo "protected : " . $this->protected . '<br>';
        echo "private : " . $this->private . '<br>';   
     }
}