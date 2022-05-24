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

//function cari($keyword) {
  //  $query = "SELECT * FROM drugs 
 //               WHERE
 //           drug_name = '$keyword' 
  //          ";
 ///   return query($query);
//}

// FUNCTION TAMBAH DATA
function tambah($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $drugs = htmlspecialchars($data["drugs"]);
    $condition = htmlspecialchars($data["condition"]);
    $allergy = htmlspecialchars($data["allergy"]);


    //query insert data
    $query = "INSERT INTO medlist_details 
                VALUES
                ('', '$drugs', '$condition', '$allergy', '')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>