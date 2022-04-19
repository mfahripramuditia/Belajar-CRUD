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


?>