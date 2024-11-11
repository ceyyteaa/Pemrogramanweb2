<?php

require_once "Buku.php";
require_once "Database.php"

class ListBuku{
    
public function getData(){
    $db = new Database();
    $koneksi = $db->getKonekesi();

    $sql = "SELECT * from buku";

    $query = $koneksi->query($sql);

    $list_buku = [];

        if($query->num_rows > 0 ){
            while($row)
        }
}

}