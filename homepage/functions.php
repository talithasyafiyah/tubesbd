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

// FUNCTION REGIS
function registrasi($data) {
    global $conn;

    $email = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $age = htmlspecialchars($data["age"]);

    //cek Email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user
     WHERE email = '$email' ");

    if( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Email sudah terdaftar!')
            </script>";
            return false;
    }

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user
     WHERE username = '$username' ");

    if( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!')
            </script>";
            return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$email', '$username', '$password', '$age', 'User')");

    return mysqli_affected_rows($conn);

    
}

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

function cari($keyword) {
    $query = "SELECT * FROM drugs 
                WHERE
            drug_name = '$keyword' 
            ";
    return query($query);
}
?>