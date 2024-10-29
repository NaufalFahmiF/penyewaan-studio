<?php

    session_start();
    require 'koneksi/koneksi.php';
    include 'header.php';
?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Kontak Kami
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">Nama Studio</div>
                        <div class="col-sm-8">Studio Semesta</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4">No.Telp</div>
                        <div class="col-sm-8">1234567890</div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">Alamat</div>
                        <div class="col-sm-8">Kelapa dua, Depok</div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">Email</div>
                        <div class="col-sm-8">Kelompok10@Gmail.com</div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">No Rekening</div>
                        <div class="col-sm-8">1234567890</div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<br>
<br>
<br>
<?php include 'footer.php';?>