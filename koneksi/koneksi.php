<?php
/*
  | Source Code Aplikasi Rental Mobil PHP & MySQL
  | 
  | @package   : rental_mobil
  | @file	   : koneksi.php 
  | @author    : fauzan1892 / Fauzan Falah
  | @copyright : Copyright (c) 2017-2021 Codekop.com (https://www.codekop.com)
  | @blog      : https://www.codekop.com/products/source-code-aplikasi-rental-mobil-php-mysql-7.html 
  | 
  | 
  | 
  | 
 */
    $user = 'pale';
    $pass = 'pale';

    $koneksi = new PDO("mysql:host=localhost:3307;dbname=penyewaan_studio", $user, $pass);

    global $url;
    $url = "http://localhost:8080/sewa_studio/";

    
    $sql_web = "SELECT * FROM studio WHERE id_studio = 5";
    $row_web = $koneksi->prepare($sql_web);
    $row_web->execute();
    global $info_web;
    $info_web = $row_web->fetch(PDO::FETCH_OBJ);
    
    error_reporting(0);
?>