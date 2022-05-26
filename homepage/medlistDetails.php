<?php
require 'functions.php';
$id = $_POST['medlist_id'];
$mdlist = query("SELECT * FROM medlist_details JOIN drugs ON medlist_details.drug_id = drugs.drug_id WHERE medlist_id = $id");
session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        td, td {
            padding: 20px;
            border: 1px solid #dddddd;
        
            
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        i{
            color: rgb(45, 160, 160);
        }

    </style>
    
    <title>Medlist Details - Drugs.com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include 'layout/header1.php';
    ?>
    <div class="container">
        <table style="width: 90%; border: 1px solid gray;  border-collapse:collapse; margin-top:80px" align="center" >
            <tr>
                <td style="width: 30%;"><a href="overviewAcc.php" style="color: blue;"> <i class="fa-solid fa-chevron-left"></i> Profiles</a> </td>
                <td  style="text-align: right;"  ><a href="Add_medlist.php" style="color: blue;">Add Medlist</a></td>
            </tr>
            <tr>
                <td style="width: 10%;;"><a href="../profile_info/profile.html"><i class="fa-solid fa-user"></i> Profil</a></td>
                <td style="border: none;  " rowspan="20"   >
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                    <?php $i = 1; ?>
                    <?php foreach( $mdlist as $row ) : ?>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <?= $row["drug_name"]; ?>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <h3><?= $row["drug_name"]; ?></h3>
                            <span>Condition :</span>
                            <p><?= $row["condition"]; ?></p>
                            <span>Allergies :</span>
                            <p><?= $row["allergy"]; ?></p>

                            </div>
                        </div>  
                        </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </div>
                </td>
        
                
            </tr> 
            <tr>
                <td>
                    <a href="../Drugs/medlistdetails.php"><i class="fa-solid fa-clipboard-list"></i> Medlist</a>
                </td>
            </tr>

            
        
            <tr>
                <td style="width: 30%;"><a href="../Reports/report.html"><i class="fa-solid fa-print"></i> Reports</a></td>
            </tr>
            <tr>
                <td style="width: 30%;"><a href="../notes/notes.html"><i class="fa-solid fa-clipboard"></i> Notes</a></td>
            </tr>
        
            </table>
    </div>
    
    <?php
    include 'layout/footer.php';
    ?>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>