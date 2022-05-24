<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tubes_sbd");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}



function cari($keyword) {
    $query = "SELECT * FROM drugs 
                WHERE
            drug_name = '$keyword' 
            ";
    return query($query);
}


?>