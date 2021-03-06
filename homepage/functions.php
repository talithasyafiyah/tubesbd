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
    $user_id = $_SESSION['user_id'];
    $query = mysqli_query($conn, "SELECT medlist.medlist_id FROM medlist WHERE medlist.user_id = '$user_id'");
    $query2= mysqli_fetch_array($query);

    // ambil data dari tiap elemen dalam form
    $drugs = htmlspecialchars($data["drugs"]);
    $condition = htmlspecialchars($data["condition"]);
    $allergy = htmlspecialchars($data["allergy"]);
    $medlist = $query2['medlist_id'];


    //query insert data
    $query = "INSERT INTO medlist_details 
                (detail_id, drugs, condition, allergy, medlist_id, drug_id)
                VALUES
                ('', '$drugs', '$condition', '$allergy', '$medlist', '')
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


function hapus($detail_id) {
    global $conn;
    $user_id = $_SESSION['user_id'];
    $query = mysqli_query($conn, "SELECT medlist.medlist_id FROM medlist WHERE medlist.user_id = '$user_id'");
    $query2= mysqli_fetch_array($query);

    $condition = $_POST['condition'];
    $allergy = $_POST['allergy'];
    $medlist_id = $query2['medlist_id'];
    $drug_id = $_POST['drug_id'];

    $sql = "DELETE FROM medlist_details WHERE detail_id = $detail_id";
               
    if($conn->query($sql)===TRUE){
        echo "<br><p class='alert alert-success text-center'><b>Data has been successfully Deleted.</b></p>";
    } else {
        echo "Terjadi kesalahan:".$sql."<br/>".$conn->error;
    }             
    

    return mysqli_affected_rows($conn);
}

function update($data) {
    global $conn;
    $user_id = $_SESSION['user_id'];
    $detail_id = $data["detail_id"];
    $query = mysqli_query($conn, "SELECT medlist.medlist_id FROM medlist WHERE medlist.user_id = '$user_id'");
    $query2= mysqli_fetch_array($query);

    $condition = $_POST['condition'];
    $allergy = $_POST['allergy'];
    $medlist_id = $query2['medlist_id'];
     $drug_id = $_POST['drug_id'];

    $sql = "UPDATE medlist_details SET
            condition = $condition
            allergy = $allergy
            medlist_id = $medlist_id
            drug_id = $drug_id
        WHERE detail_id = $detail_id
    ";
    if($conn->query($sql)===TRUE){
                                            echo "<br><p class='alert alert-success text-center'><b>Data has been successfully added.</b></p>";
                                        } else {
                                            echo "Terjadi kesalahan:".$sql."<br/>".$conn->error;
                                        }             
}
?>

