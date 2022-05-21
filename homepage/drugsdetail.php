<?php 
include '../admin/includes/koneksi.php';
$id = $_POST['drug_id'];
$query = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drug_id= $id");
$query2= mysqli_fetch_array($query); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' href='css/ddc-pack-site.min.2af34de6.css'>
    <link rel='stylesheet' href='css/ddc-print.min.07943132.css' media='print'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>

    <title>Pill Identifier - Drugs.Com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
    <style>
        .isi {
            margin-left: 12px;
            padding-left: 4px;
            font-size: 20px;
        }
        .form-check {
            margin-left: 10px;
            font-size: 15px;
            padding-bottom: 3px;
        }
        .form {
            margin-left: 10px;
        }
        .hint {
          height: 160px;
          width: 230px;
        }
        .popularpill {
          margin-top: 12px;
        }
    </style>
</head>
<body>
<?php
session_start();
if(empty($_SESSION['level'])) {
    include 'layout/header.php';
} else {
    include 'layout/header1.php';
}
?>
    <!--CONTENT-->

    <!--Grid Kiri-->
    <!--baris 1-->
    <div class="container mt-4 ">
        <div class="row row-cols-2">
            <div class="col-9 ">
              <p style="font-size: 13px;"> <a href="" style="color: grey;"> Drugs A to Z</a>  </p>

              <?php 
                include '../admin/includes/koneksi.php';
                $hasil = mysqli_query($koneksi, "SELECT * FROM drugs WHERE drugs_id = '$id' " );
                foreach ($hasil as $data) {
              ?>
              <input hidden type="text" name="name" value="<?php echo $data['drug_name']; ?>">
                <h1><bold><?php echo $data['drug_name']; ?></bold></h1>
                <p><b>generic name : </b> <?php echo $data['generic_name']; ?>  <br>
                    <b>Brand names : </b> <?php echo $data['brand_name']; ?>
                     <br>
                     <b>Dosage forms : </b> <?php echo $data['dosage_form']; ?>
                      <br>
                      <b>Drug class : </b> <a href=""><?php echo $data['drug_class']; ?></a>
                      <br>
                </p>
                <br>

                  <!--what is ...-->

                <h2> <bold>What is <?php echo $data['drug_name']; ?>?</bold> </h2>
                <div>
                <?php echo $data['definition']; ?>
                </div>
              <?php } ?>
               
            </div>
                                      
            <!--Grid Kanan-->
            <div class="col-3 mt-5 pl-4">
                <img src="img/logo/Situs.png" alt="">
            
                <div class="border mt-1" style="border-radius: 11px; background-color:rgb(228, 228, 228);">
                    <div class="isi">
                        <h5>Subscribe To Our Newsletter</h5>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                        FDA Safety Alerts
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Daily MedNews
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Monthly Letters
                        </label>
                    </div>
                    <div class="form-check pb-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            I accept the Terms and Privacy Policy
                        </label>
                    </div>
                    <form>
                        <div class="form-row align-items-center ml-2">
                          <div class="col pl-2">
                            <label class="sr-only" for="inlineFormInput">Email</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Enter Email">
                          </div>
                          <div class="col ">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div> 
    </div>
     
<?php
include 'layout/footer.php';
?>

<!--Script-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" ></script>
<script src="js/jquery-3.6.0.min.js" ></script>
</body>
</html>