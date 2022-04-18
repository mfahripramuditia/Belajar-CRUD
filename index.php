<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Belajar CRUD!</title>
  </head>
  <body>
    <div class="container text-center mt-5">
        <h1>DAFTAR MAHASISWA</h1>
    </div> 
    

    <div class="container">
        <div class="row justify-content-center m-5">
            <div class="col-md-10 border shadow">
                <table class="table table-bordered border-danger text-center mt-3">
                    <thead>
                         <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tempat Tanggal Lahir</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Muhammad Fahri Pramuditia</td>
                            <td>Lubuk Pakam</td>
                            <td>Lubuk Pakam</td>
                            <td>@mdo</td>
                            <td><a class="btn btn-primary" href="#" role="button">Ubah</a> | <a class="btn btn-danger" href="#" role="button">Hapus</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
