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
    mysqli_query($conn, "INSERT INTO user VALUES('', '$email', '$username', '$password', '$age', 'user')");

    return mysqli_affected_rows($conn);

    
}
?>