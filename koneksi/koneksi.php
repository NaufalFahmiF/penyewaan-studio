<?php
    $user = 'rds_admin';
    $pass = '48F8B31Fe576';
    
    try {
        $koneksi = new PDO("mysql:host=rm-d9jetkk94383ff035.mysql.ap-southeast-5.rds.aliyuncs.com;port=3306;dbname=penyewaan_studio", $user, $pass);
        $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    global $url;
    $url = "8.215.4.20";

    $sql_web = "SELECT * FROM studio WHERE id_studio = 5";
    $row_web = $koneksi->prepare($sql_web);
    $row_web->execute();
    global $info_web;
    $info_web = $row_web->fetch(PDO::FETCH_OBJ);
    
    error_reporting(0);
?>
