<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from sepatu where id_sepatu='$id'");

if($hapus==true){

    header("location:pesanan.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>