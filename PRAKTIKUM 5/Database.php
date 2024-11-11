<?php

class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $DatabaseName = "perpustakaan";
    private $koneksi = null;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this-> password, 
        $this->DatabaseName);
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }
    public function getKoneksi(){
        return $this->koneksi;
    }


}