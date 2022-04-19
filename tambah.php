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

    <h1 class="text-center">Tambah Data</h1>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="container">
                    <label for="inputNama" class="form-label">Input Nama Lengkap Anda</label>
                    <input type="text" id="inputNama" class="form-control">
                </div>

                <div class="container mt-3">
                    <label for="inputAlamat" class="form-label">Input Alamat Lengkap Anda</label>
                    <input type="text" id="inputAlamat" class="form-control">
                </div>

                <div class="container mt-3">
                    <label for="inputAlamat" class="form-label">Input Tempat / Tanggal Lahir Anda</label>
                    <input type="text" id="inputTTL" class="form-control">
                </div>

            
                <div class="container mt-3">
                    <label for="inputAlamat" class="form-label">Upload Foto Anda</label>
                    <input type="file" id="uploadFoto" class="form-control">
                </div>


                <div class="container mt-5">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <a class="btn btn-primary" href="tambah.php" role="button">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
