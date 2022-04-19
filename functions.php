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
    $foto = htmlspecialchars($data["foto"]);
    

    $query =  "INSERT INTO mahasiswa
                VALUES
                ('','$nama','$alamat','$ttl','$foto')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
}

?>