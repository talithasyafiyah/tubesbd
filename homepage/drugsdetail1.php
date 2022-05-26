<?php 
include '../admin/includes/koneksi.php';
$id = $_POST['drug_id'];
$query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id = '$id'");
$query2= mysqli_fetch_array($query); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title><?php echo $query2["drug_name"]; ?></title>
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
                    <div class="col-8">
                        <p style="font-size: 13px;"> <a href="" style="color: grey;"> Drugs A to Z</a>  </p>
                        <?php
                        $drug_id = $_POST['drug_id'];
                        $hasil = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id = '$drug_id'");
                        foreach($hasil as $row) {
                        ?>
                        <h1><b><?=$row['drug_name'];?></b></h1>

                        <p><b>Generic name : </b> <?=$row['generic_name'];?>  <br>
                        <b>Brand names : </b> <?=$row['brand_name'];?>
                        <br>
                        <b>Dosage forms : </b> <?=$row['dosage_form'];?>
                        <br>
                        <b>Drug class : </b> <?=$row['drug_class'];?>
                        <br>
                    </p>

                  <!--what is ...-->

                <h2> <b>What is <?=$row['drug_name'];?>?</b> </h2>
                <div>
                  <p><?=strip_tags($row['definition']);?></p>
                  <?php } ?>
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