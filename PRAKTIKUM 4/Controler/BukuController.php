<?php

require_once "Model/ListBuku.php";

class BukuController{

    public function jalankan(){
        // menggunakan model
        $daftar_buku_model = new ListBuku();
        $daftar_buku = $daftar_buku_model;

        // var_dump($daftar_buku->getData());
        // die();

        //mengirim dan menampilkan data ke View
        include_once "View/BukuView.php";
    }

    public function edit(){
        $id_buku = $_GET['id_buku'];

        $daftar_buku = new ListBuku();
        $buku = $daftar_buku->getBukuById($id_buku);

        if($buku){
            include_once "view/EditBukuView.php";
        }else{
            header("location: http://localhost/index.php");
        }

    }

    public function update(){
        echo "update";
    }

    public function simpan(){
        // mengambil nilai dari form tambah pada Buku view
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        // buat objek buku dari class buku
        $buku = new Buku($judul, $pengarang, $penerbit, $tahun);

        // menyimpan buku dengan method simpan di class ListBuku
        $daftar_buku = new ListBuku();
        $daftar_buku->simpan($buku) ;

        session_start();
        if($status){
            $_SESSION['message'] = " Data buku dengan judul " . $buku->getJudul() . "Berhasil Disimpan!";
        }else{
            $_SESSION['error'] = "Data Gagal Disimpan!";

            header("location: http://localhost/index.php");
        }

    }

    public function hapus(){
        $id_buku = $_POST['id_buku'];

        $daftar_buku = new listBuku();
        $status =$daftar_buku->hapus($id_buku);

        session_start();
        if($status){
            $_SESSION['message'] = " Data buku dengan judul " . $buku->getJudul() . "Berhasil Dihapus!";
        }else{
            $_SESSION['error'] = "Data Gagal Dihapus!";
        }
        header(header: 'location: http://localhost/index.php');
    }
    
           
}
