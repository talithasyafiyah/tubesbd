<?php
require 'functions.php';
$mdlist = query("SELECT * FROM medlist_details  ");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3/dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/6357c29a35.js" crossorigin="anonymous"></script>
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
</head>
<body>
    <table style="width: 90%; height: 85%;  border: 1px solid gray;  border-collapse:collapse; margin-top:80px" align="center" >
    <tr>
        <td style="width: 10%;"><a href="../profile_info/profile.html" style="color: blue;"> < Profiles</a> </td>
        <td  style="text-align: right;"  ><a href="../Drugs/Add_medlist.php" style="color: blue;">Add Medlist</a></td>
    </tr>
    <tr>
        <td style="width: 10%; padding: 30px;"><a href="../profile_info/profile.html"><h5>Profil</h5></a></td>
        <td style="border: none; padding-bottom: 1300px; " rowspan="20"   >
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <?php $i = 1; ?>
              <?php foreach( $mdlist as $row ) : ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      <?= $row["drugs"]; ?>
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <h3><?= $row["drugs"]; ?></h3>
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
            <a href="../Drugs/medlistdetails.php"><img src="../gambar/drugs.png" alt="" srcset="" width="40x"><b>Medlist</b></a>
        </td>
    </tr>

    
   
    <tr>
        <td style="width: 10%;"><a href="../Reports/report.html"><img src="../gambar/report.png" alt="" srcset="" width="40px"> Reports</a></td>
    </tr>
    <tr>
        <td style="width: 10%;"><a href="../notes/notes.html"><img src="../gambar/edit.png" alt="" srcset="" width="40px"> Notes</a></td>
    </tr>
    <tr>

        <td style="width: 30%;">
            <div class="alert alert-secondary" role="alert">
                Options 
                
            </div> <br>
            <a href="../print/print.html">Print</a> <br>
            Includes Wallet size version

        </td>
        
    </tr>
   
   
    <tr>
        <td style="width: 10%;" ><a href="../share/share.html">Share</a>  <br>
            Sharing status : private
        </td>
    </tr>
    <tr>
        <td style="width: 10%;" ><a href="../notif/notif.html">Notifications</a><br>
            0 email
        </td>

    </tr>
   
  
    <tr>
        <td style="width: 10%;" >
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Personal Information
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" >Pregnancy warnings <br> <b>Enabled</b><br><a href="../profile_info/profile.html"> edit</a></div>
                  </div>
                </div>
        
        </td>
    </tr>
    <tr>
        <td style="width: 10%;"><a href="../profile_info/profile.html" style="color: blue;">Edit Profile</a></td>

    </tr>
    <tr>
        <td style="width: 10%;"><a href="../add_another/new_add.html" style="color: blue;">Add another profile</a></td>
    </tr>
    <tr>
        <td style="width: 10%;"><a href="../etc/FAQ.html" style="color: blue;">FAQ</a></td>
    </tr>
    <tr>
        <td style="width: 10%;"><a href="../etc/feedback.html" style="color: blue;">Feedback</a></td>
    </tr>
    <tr>
        <td style="width: 10%;"><a href="../etc/Terms.html" style="color: blue;">Terms</a></td>
    </tr>
    <tr>
        <td style="width: 10%;color: blue;" >Sign out</td>
    </tr>
    
   
    </table>
    

<script src="../bootstrap-5.1.3/dist/js/bootstrap.js"></script>
<script src="../bootstrap-5.1.3/jquery-3.6.0.min.js"></script>
</body>
</html>