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
                        <h1><b>Drug Index A to Z</b></h1>
                        <p>Detailed and accurate information is provided on over 24,000 prescription and over-the-counter medicines for both consumers and healthcare professionals.</p>
                        <div class="Search">
                          <form action="ResultDrug.php" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Enter a drug name" aria-label="Enter a condition, e.g. acne" aria-describedby="button-addon2">
                                <button class="btn search" name="submit-search" type="submit" id="button" style="background-color: rgb(40, 93, 185); color: white;"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                          </form>
                        </div>
                        <div class="Browse mt-lg-5">
                            <h2><b>Browse Alphabetically</b></h2>
                            <div class="row">
                                <div class="col px-0"><button class="button button4">A</button></div>
                                <div class="col px-0"><button class="button button4">B</button></div>
                                <div class="col px-0"><button class="button button4">C</button></div>
                                <div class="col px-0"><button class="button button4">D</button></div>
                                <div class="col px-0"><button class="button button4">E</button></div>
                                <div class="col px-0"><button class="button button4">F</button></div>
                                <div class="col px-0"><button class="button button4">G</button></div>
                                <div class="col px-0"><button class="button button4">H</button></div>
                                <div class="col px-0"><button class="button button4">I</button></div>
                                <div class="col px-0"><button class="button button4">J</button></div>
                                <div class="col px-0"><button class="button button4">K</button></div>
                                <div class="col px-0"><button class="button button4">L</button></div>
                                <div class="col px-0"><button class="button button4">M</button></div>
                                <div class="col px-0"><button class="button button4">N</button></div>
                                <div class="col px-0"><button class="button button4">O</button></div>
                                <div class="col px-0"><button class="button button4">P</button></div>
                                <div class="col px-0"><button class="button button4">Q</button></div>
                                <div class="col px-0"><button class="button button4">R</button></div>
                                <div class="col px-0"><button class="button button4">S</button></div>
                                <div class="col px-0"><button class="button button4">T</button></div>
                                <div class="col px-0"><button class="button button4">U</button></div>
                                <div class="col px-0"><button class="button button4">V</button></div>
                                <div class="col px-0"><button class="button button4">W</button></div>
                                <div class="col px-0"><button class="button button4">X</button></div>
                                <div class="col px-0"><button class="button button4">Y</button></div>
                                <div class="col px-0"><button class="button button4">Z</button></div>
                                <div class="col px-0"><button class="button button4">0-9</button></div>
                              </div>
                        </div>

                        <div class="popular mt-lg-5 mb-lg-5">
                            <h3><b>Popular Drug Searches</b></h3>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs  WHERE drug_id < 12");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id BETWEEN 62 AND 74");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php } ?>
                                </div>
                                <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id BETWEEN 104 AND 115");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id BETWEEN 144 AND 156");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php } ?>
                                </div>
                                <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id BETWEEN 211 AND 226");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id BETWEEN 289 AND 297");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php } ?>
                                </div>
                                <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id BETWEEN 335 AND 340");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id BETWEEN 374 AND 383");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
                                            </button>
                                        </form>
                                    <?php } ?>

                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id BETWEEN 535 AND 544");
                                    foreach($query as $row){ ?>
                                        <form action="drugsdetail1.php" method="POST">
                                            <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                            <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                <?php echo $row["drug_name"]; ?> 
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
                serviceUrl: "source.php",   // Kode php untuk prosesing data.
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