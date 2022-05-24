<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>List of Treatments that start with letter.</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>
</head>

<style>
.button4 {
  background-color: #e7e7e7;
  color: rgb(0, 0, 0);
  border: 2px solid #e7e7e7;
  font-size: 16px;
  margin: 4px 2px;
  width: 40px;
}

.button4:hover {background-color: #000000; color:white;}
.cari{
    font-size: 15px;
}
.adsearch{
    text-align: right;
}
.nav-link{
    text-align: center;
}
.Recently{
    text-align: left;
}
</style>

<body>

<?php
session_start();
if(empty($_SESSION['level'])) {
    include 'layout/header.php';
} else {
    include 'layout/header1.php';
}
?>

<!-- Content-->
    <div class="container-xxl">
        <div class="main">
            <div class="container mt-lg-5">
                <div class="row">
                    <div class="col">
                        <h1><b>Drugs: 
                            <?php
                                if(isset($_POST['A'])){
                                    echo 'A';
                                } else if(isset($_POST['B'])){
                                    echo 'B';
                                } else if(isset($_POST['C'])){
                                    echo 'C';
                                } else if(isset($_POST['D'])){
                                    echo 'D';
                                } else if(isset($_POST['E'])){
                                    echo 'E';
                                } else if(isset($_POST['F'])){
                                    echo 'F';
                                } else if(isset($_POST['G'])){
                                    echo 'G';
                                } else if(isset($_POST['H'])){
                                    echo 'H';
                                } else if(isset($_POST['I'])){
                                    echo 'I';
                                } else if(isset($_POST['J'])){
                                    echo 'J';
                                } else if(isset($_POST['K'])){
                                    echo 'K';
                                } else if(isset($_POST['L'])){
                                    echo 'L';
                                } else if(isset($_POST['M'])){
                                    echo 'M';
                                } else if(isset($_POST['N'])){
                                    echo 'N';
                                } else if(isset($_POST['O'])){
                                    echo 'O';
                                } else if(isset($_POST['P'])){
                                    echo 'P';
                                } else if(isset($_POST['Q'])){
                                    echo 'Q';
                                } else if(isset($_POST['R'])){
                                    echo 'R';
                                } else if(isset($_POST['S'])){
                                    echo 'S';
                                } else if(isset($_POST['T'])){
                                    echo 'T';
                                } else if(isset($_POST['U'])){
                                    echo 'U';
                                } else if(isset($_POST['V'])){
                                    echo 'V';
                                } else if(isset($_POST['W'])){
                                    echo 'W';
                                } else if(isset($_POST['X'])){
                                    echo 'X';
                                } else if(isset($_POST['Y'])){
                                    echo 'Y';
                                } else if(isset($_POST['Z'])){
                                    echo 'Z';
                                }
                            ?>
                        </b></h1>
                        <p>List of drugs and medications that start with the letter '<?php
                                if(isset($_POST['A'])){
                                    echo 'A';
                                } else if(isset($_POST['B'])){
                                    echo 'B';
                                } else if(isset($_POST['C'])){
                                    echo 'C';
                                } else if(isset($_POST['D'])){
                                    echo 'D';
                                } else if(isset($_POST['E'])){
                                    echo 'E';
                                } else if(isset($_POST['F'])){
                                    echo 'F';
                                } else if(isset($_POST['G'])){
                                    echo 'G';
                                } else if(isset($_POST['H'])){
                                    echo 'H';
                                } else if(isset($_POST['I'])){
                                    echo 'I';
                                } else if(isset($_POST['J'])){
                                    echo 'J';
                                } else if(isset($_POST['K'])){
                                    echo 'K';
                                } else if(isset($_POST['L'])){
                                    echo 'L';
                                } else if(isset($_POST['M'])){
                                    echo 'M';
                                } else if(isset($_POST['N'])){
                                    echo 'N';
                                } else if(isset($_POST['O'])){
                                    echo 'O';
                                } else if(isset($_POST['P'])){
                                    echo 'P';
                                } else if(isset($_POST['Q'])){
                                    echo 'Q';
                                } else if(isset($_POST['R'])){
                                    echo 'R';
                                } else if(isset($_POST['S'])){
                                    echo 'S';
                                } else if(isset($_POST['T'])){
                                    echo 'T';
                                } else if(isset($_POST['U'])){
                                    echo 'U';
                                } else if(isset($_POST['V'])){
                                    echo 'V';
                                } else if(isset($_POST['W'])){
                                    echo 'W';
                                } else if(isset($_POST['X'])){
                                    echo 'X';
                                } else if(isset($_POST['Y'])){
                                    echo 'Y';
                                } else if(isset($_POST['Z'])){
                                    echo 'Z';
                                }
                            ?>'.</p>
                        <div class="popular mt-lg-3 mb-lg-5">
                            <h3><b>Most Common '<?php
                                if(isset($_POST['A'])){
                                    echo 'A';
                                } else if(isset($_POST['B'])){
                                    echo 'B';
                                } else if(isset($_POST['C'])){
                                    echo 'C';
                                } else if(isset($_POST['D'])){
                                    echo 'D';
                                } else if(isset($_POST['E'])){
                                    echo 'E';
                                } else if(isset($_POST['F'])){
                                    echo 'F';
                                } else if(isset($_POST['G'])){
                                    echo 'G';
                                } else if(isset($_POST['H'])){
                                    echo 'H';
                                } else if(isset($_POST['I'])){
                                    echo 'I';
                                } else if(isset($_POST['J'])){
                                    echo 'J';
                                } else if(isset($_POST['K'])){
                                    echo 'K';
                                } else if(isset($_POST['L'])){
                                    echo 'L';
                                } else if(isset($_POST['M'])){
                                    echo 'M';
                                } else if(isset($_POST['N'])){
                                    echo 'N';
                                } else if(isset($_POST['O'])){
                                    echo 'O';
                                } else if(isset($_POST['P'])){
                                    echo 'P';
                                } else if(isset($_POST['Q'])){
                                    echo 'Q';
                                } else if(isset($_POST['R'])){
                                    echo 'R';
                                } else if(isset($_POST['S'])){
                                    echo 'S';
                                } else if(isset($_POST['T'])){
                                    echo 'T';
                                } else if(isset($_POST['U'])){
                                    echo 'U';
                                } else if(isset($_POST['V'])){
                                    echo 'V';
                                } else if(isset($_POST['W'])){
                                    echo 'W';
                                } else if(isset($_POST['X'])){
                                    echo 'X';
                                } else if(isset($_POST['Y'])){
                                    echo 'Y';
                                } else if(isset($_POST['Z'])){
                                    echo 'Z';
                                }
                            ?>' Drugs</b></h3>
                            <p>20 of the most common medications starting with '<?php
                                if(isset($_POST['A'])){
                                    echo 'A';
                                } else if(isset($_POST['B'])){
                                    echo 'B';
                                } else if(isset($_POST['C'])){
                                    echo 'C';
                                } else if(isset($_POST['D'])){
                                    echo 'D';
                                } else if(isset($_POST['E'])){
                                    echo 'E';
                                } else if(isset($_POST['F'])){
                                    echo 'F';
                                } else if(isset($_POST['G'])){
                                    echo 'G';
                                } else if(isset($_POST['H'])){
                                    echo 'H';
                                } else if(isset($_POST['I'])){
                                    echo 'I';
                                } else if(isset($_POST['J'])){
                                    echo 'J';
                                } else if(isset($_POST['K'])){
                                    echo 'K';
                                } else if(isset($_POST['L'])){
                                    echo 'L';
                                } else if(isset($_POST['M'])){
                                    echo 'M';
                                } else if(isset($_POST['N'])){
                                    echo 'N';
                                } else if(isset($_POST['O'])){
                                    echo 'O';
                                } else if(isset($_POST['P'])){
                                    echo 'P';
                                } else if(isset($_POST['Q'])){
                                    echo 'Q';
                                } else if(isset($_POST['R'])){
                                    echo 'R';
                                } else if(isset($_POST['S'])){
                                    echo 'S';
                                } else if(isset($_POST['T'])){
                                    echo 'T';
                                } else if(isset($_POST['U'])){
                                    echo 'U';
                                } else if(isset($_POST['V'])){
                                    echo 'V';
                                } else if(isset($_POST['W'])){
                                    echo 'W';
                                } else if(isset($_POST['X'])){
                                    echo 'X';
                                } else if(isset($_POST['Y'])){
                                    echo 'Y';
                                } else if(isset($_POST['Z'])){
                                    echo 'Z';
                                }
                            ?>'.</p>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                <div class="col-6 px-0">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    if (isset($_POST['A'])) {
                                        $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'A%'");
                                        foreach($query as $row) { ?>
                                        <form action="treatmentDetails.php" method="POST">
                                            <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["treatment_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php }
                                        } else if(isset($_POST['B'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'B%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>  
                                    <?php }
                                        } else if(isset($_POST['C'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'C%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>  
                                    <?php }
                                        } else if(isset($_POST['E'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'E%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                        } else if(isset($_POST['F'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'F%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['G'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'G%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['H'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'H%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['I'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'I%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['J'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'J%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['K'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'K%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['L'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'L%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['M'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'M%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['N'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'N%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['D'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'D%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['O'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'O%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['P'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'P%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['Q'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'Q%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['R'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'R%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['S'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'S%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['T'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'T%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['U'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'U%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['V'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'V%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['W'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'W%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['X'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'X%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['Y'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'Y%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php }
                                    } else if(isset($_POST['Z'])){
                                            $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_name LIKE 'Z%'");
                                            foreach($query as $row) { ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["drug_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } } ?>
                                </div>
                                
                            </div>  
                            
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 20rem; background-color: #f7f7f7;">
                            <div class="card-body">
                                <h6>Subscribe to our newsletters</h6>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FDA Safety Alerts
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Daily MedNews
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Monthly Newsletter
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        I accept the Terms and Privacy Policy
                                    </label>
                                  </div>
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email address" aria-label="Email address" aria-describedby="button-addon2" style="width:5cm;">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="background-color: rgb(40, 93, 185); color: white;">Subscribe</button>
                                  </div>
                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'layout/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>