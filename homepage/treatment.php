<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Medical Treatment Options for Disease and Conditions - Drugs.com</title>
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
body {
    font-family: 'Roboto', Arial, Sans-serif;
    font-size: 15px;
    font-weight: 400;
}

input[type=text] {
    border: 2px solid #bdbdbd;
    font-family: 'Roboto', Arial, Sans-serif;
    font-size: 15px;
    font-weight: 400;
    padding: .5em .75em;
    width: 300px;
}
input[type=text]:focus {
    border: 2px solid #757575;
    outline: none;
}
.autocomplete-suggestions {
    border: 1px solid #999;
    background: #FFF;
    overflow: auto;
}
.autocomplete-suggestion {
    padding: 2px 5px;
    white-space: nowrap;
    overflow: hidden;
}
.autocomplete-selected {
    background: #F0F0F0;
}
.autocomplete-suggestions strong {
    font-weight: normal;
    color: #3399FF;
}
.autocomplete-group {
    padding: 2px 5px;
}
.autocomplete-group strong {
    display: block;
    border-bottom: 1px solid #000;
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
                    <div class="col-8">
                        <h1><b>Treatment Options</b></h1>
                        <p>Find your disease or condition and discover what medication options are available for you.</p>
                        <div class="Search">
                            <form action="ResultTreatment.php" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Enter a condition, e.g. acne" aria-label="Enter a condition, e.g. acne" aria-describedby="button-addon2">
                                <button class="btn search" name="submit-search" type="submit" id="button" style="background-color: rgb(40, 93, 185); color: white;"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            </form>
                            
                        </div>
                        <div class="Browse mt-lg-5">
                            <h2><b>Browse Alphabetically</b></h2>
                            <div class="row mt-3">
                                <form action="alphaT.php" method="POST">
                                    <ul id="alphabet">
                                        <li><button type="submit" name="A" class="btn btn-outline-dark">A</button></li>
                                        <li><button type="submit" name="B" class="btn btn-outline-dark">B</button></li>
                                        <li><button type="submit" name="C" class="btn btn-outline-dark">C</button></li>
                                        <li><button type="submit" name="D" class="btn btn-outline-dark">D</button></li>
                                        <li><button type="submit" name="E" class="btn btn-outline-dark">E</button></li>
                                        <li><button type="submit" name="F" class="btn btn-outline-dark">F</button></li>
                                        <li><button type="submit" name="G" class="btn btn-outline-dark">G</button></li>
                                        <li><button type="submit" name="H" class="btn btn-outline-dark">H</button></li>
                                        <li><button type="submit" name="I" class="btn btn-outline-dark">I</button></li>
                                        <li><button type="submit" name="J" class="btn btn-outline-dark">J</button></li>
                                        <li><button type="submit" name="K" class="btn btn-outline-dark">K</button></li>
                                        <li><button type="submit" name="L" class="btn btn-outline-dark">L</button></li>
                                        <li><button type="submit" name="M" class="btn btn-outline-dark">M</button></li>
                                        <li><button type="submit" name="N" class="btn btn-outline-dark">N</button></li>
                                        <li><button type="submit" name="O" class="btn btn-outline-dark">O</button></li>
                                        <li><button type="submit" name="P" class="btn btn-outline-dark">P</button></li>
                                        <li><button type="submit" name="Q" class="btn btn-outline-dark">Q</button></li>
                                        <li><button type="submit" name="R" class="btn btn-outline-dark">R</button></li>
                                        <li><button type="submit" name="S" class="btn btn-outline-dark">S</button></li>
                                        <li><button type="submit" name="T" class="btn btn-outline-dark">T</button></li>
                                        <li><button type="submit" name="U" class="btn btn-outline-dark">U</button></li>
                                        <li><button type="submit" name="V" class="btn btn-outline-dark">V</button></li>
                                        <li><button type="submit" name="W" class="btn btn-outline-dark">W</button></li>
                                        <li><button type="submit" name="X" class="btn btn-outline-dark">X</button></li>
                                        <li><button type="submit" name="Y" class="btn btn-outline-dark">Y</button></li>
                                        <li><button type="submit" name="Z" class="btn btn-outline-dark">Z</button></li>
                                        <li><button type="submit" class="btn btn-outline-dark">0-9</button></li>
                                        <li><button type="submit" class="btn btn-outline-dark">Advanced Search</button></li>
                                    </ul>
                                </form>
                            </div>
                        </div>

                        <div class="popular mt-lg-5 mb-lg-5">
                            <h3><b>Common treatment options for:</b></h3>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 8 AND 14");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 24 AND 29");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>
                                </div>

                                <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 39 AND 43");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 45 AND 49");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 65 AND 67");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>
                                </div>

                                <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 97 AND 103");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 128 AND 132");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>
                                </div>

                                <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 152 AND 159");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id BETWEEN 169 AND 172");
                                    foreach($query as $row){ ?>
                                            <form action="treatmentDetails.php" method="POST">
                                                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["treatment_name"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>
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
        <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.autocomplete.min.js"></script>
       <script>
        
        $(document).ready(function() {
            // Selector input yang akan menampilkan autocomplete.
            $( "#search" ).autocomplete({
                serviceUrl: "source2.php",   // Kode php untuk prosesing data.
                dataType: "JSON",           // Tipe data JSON.
                onSelect: function (suggestion) {
                    $( "#search" ).val("" + suggestion.drugs)     
                             
                }

            });

        })
   
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>