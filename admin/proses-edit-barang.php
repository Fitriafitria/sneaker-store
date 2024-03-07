<?php

$id=$_POST['id_sepatu'];
$nama_sepatu=$_POST['nama_sepatu'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("update sepatu set id_sepatu ='$id', nama_sepatu='$nama_sepatu', harga='$harga', jumlah='$jumlah', total_harga=$total_harga where id_sepatu='$id'"); 
                       
if($simpan==true){

    header("location:tampil-barang.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>