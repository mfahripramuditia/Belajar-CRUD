<?php

require 'functions.php';

if( isset ($_POST["submit"])) {
   


    //cek apakah data berhasil ditambahkan atau tidak
    if (insert($_POST) > 0) {
        echo "<script> alert('data berhasil di tambahkan!')
        document.location.href = 'index.php'
        </script>
        ";
       
    } else {
        echo "<script> alert('data gagal di tambahkan!')
        document.location.href = 'index.php'
        </script>";
    }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>

    <h1 class="text-center m-5 text-bold fw-bold">TAMBAH DATA</h1>


    <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="container">
                    <label for="inputNama" class="form-label fw-bold">Input Nama Lengkap Anda</label>
                    <input type="text" id="nama" class="form-control" name="nama">
                </div>

                <div class="container mt-3">
                    <label for="inputAlamat" class="form-label fw-bold">Input Alamat Lengkap Anda</label>
                    <input type="text" id="alamat" class="form-control" name="alamat">
                </div>

                <div class="container mt-3">
                    <label for="inputAlamat" class="form-label fw-bold">Input Tempat / Tanggal Lahir Anda</label>
                    <input type="text" id="ttl" class="form-control" name="ttl">
                </div>

                <div class="container mt-3">
                    <label for="inputAlamat" class="form-label fw-bold">Upload Foto Anda</label>
                    <input type="file" id="foto" class="form-control" name="foto">
                </div>


                <div class="container mt-5">
                    <div class="row text-center">
                        <div class="col-md-12">
                        <button type="submit" name="submit" class="btn-primary">
                            Tambah Data Mahasiswa
                        </button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
