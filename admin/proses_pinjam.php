<?php

 require '../koneksi/koneksi.php';

if($_GET['id'] == 'konfirmasi')
{
    $data2[] = $_POST['status'];
    $data2[] = $_POST['id_studio'];
    $sql2 = "UPDATE `studio` SET `status`= ? WHERE id_studio= ?";
    $row2 = $koneksi->prepare($sql2);
    $row2->execute($data2);

    echo '<script>alert("Status studio di pinjam");history.go(-1);</script>'; 
}