<?php 

//koneksi ke database
$conn = mysqli_connect("localhost","root","","belajar_crud");

//mengambil data dari tabel database
function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows =[];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function insert ($data) {
    global $conn;

    //ambil data dari form

    $nama = htmlspecialchars ($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $ttl = htmlspecialchars($data["ttl"]);
    
    $foto = upload ();
    if (!$foto) {
        return false;
    }


    $query =  "INSERT INTO mahasiswa
                VALUES
                ('','$nama','$alamat','$ttl','$foto')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
}

function upload () {

    $namaFile = $_FILES ['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if ( $error === 4 ) {
        echo " <script>
        alert('Pilih gambar terlebih dahulu');
        </script>";

        return false;
    }

    $ekstensiFotoValid = ['jpg','jpeg','png'];
    $ekstensiFoto = explode('.', $namaFile);
    $ekstensiFoto = strtolower(end($ekstensiFoto));

    if (!in_array($ekstensiFoto, $ekstensiFotoValid) )  {

        echo "<script>
        alert('Yang Anda Pilih Bukan Gambar');
        </script>";
        return false;

    }

    if ($ukuranFile > 1000000) {
        echo "<script>
        alert ('Ukuran gambar terlalu besar');
        </script>";
    return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFoto;

    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

    return $namaFileBaru;
}

function delete ($id) {
    global $conn;

    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

?>