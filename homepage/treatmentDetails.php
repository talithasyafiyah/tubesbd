<?php 
include '../admin/includes/koneksi.php';
$id = $_POST['treatment_id'];
$query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id = '$id'");
$query2= mysqli_fetch_assoc($query); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title><?php echo $query2["treatment_name"]; ?></title>
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
                    <?php
                        $treatment_id = $_POST['treatment_id'];
                        $hasil = mysqli_query($koneksi, "SELECT * FROM treatment JOIN manydrugs ON manydrugs.treatment_id = treatment.treatment_id JOIN drugs ON drugs.drug_id = manydrugs.drug_id WHERE treatment.treatment_id = '$treatment_id'");
                        $row2 = mysqli_fetch_assoc($hasil);
                    ?>
                        <h1><b>Medications for <?=$row2['treatment_name'];?></b></h1>
                        <p><?=$row2['medication'];?></p>
                        
                        <h3><b>Drug used to treat <?=$row2['treatment_name'];?></b></h3>
                        <p>The following list of medications are in some way related to or used in the treatment of this condition.</p>
                        <?php foreach($hasil as $row) { ?>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <?=$row['drug_name'];?>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" > 
                                                <form action="drugsdetail1.php" method="POST">
                                                    <input hidden type="text" name="drug_id" value=<?php echo $row["drug_id"]; ?>>
                                                    <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["drug_name"]; ?> 
                                                    </button>
                                                </form>
                                    Generic Name : <?=$row['generic_name'];?> <br>  Class : <?=$row['drug_class'];?> <br></div>
                                </div>
                                
                            </div>
                        </div>
                        <?php } ?>
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