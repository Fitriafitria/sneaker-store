<?php

$id=$_POST['id_sepatu'];
$nama_sepatu=$_POST['nama_sepatu'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into sepatu(id_sepatu,nama_sepatu,harga,jumlah,total_harga) 
                        values ('$id_sepatu', '$nama_sepatu', '$harga', '$jumlah', '$total_harga')");

if($simpan==true){

    header("location:tampil-barang.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>