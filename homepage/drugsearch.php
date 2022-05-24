<?php
require 'functions.php';

$obat = $_POST['obat'];
$drugs = cari($obat);

//var_dump($_POST['obat']);
/* var_dump($drugs); */


/* foreach($drugs as $item) {
    var_dump($item['drug_name']);
} */


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
        table,th, td {
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
    
    <title>nt</title>
</head>
<body>
    <table style="width: 93%; height: 85%;   margin-top:80px" align="center" >
    <tr>
        <td style="width: 10%;"><a href="../profile_info/profile.html" style="color: blue;"> < Profiles(1)</a> </td>
        <td  style="text-align: left;"  ><a href="../Drugs/Drugs.html" style="color: blue;">Cancel</a></td>
    </tr>
    <tr>
        <tr >
            <th style="width: 10%; padding: 30px;"><a href="../profile_info/profile.html"><h5>Peniel</h5></a> </th>
            <td style="border: none; padding-bottom: 1500px; width: 32%;" rowspan="20"   >
                <h4>Add your first Drug...</h4>
                <span>Add drugs to your profile to start building a medication record. Gain instant access to interactions, warnings, and alerts.</span> <br> <br>
             </td>
            <td style="border-bottom: none; padding-bottom: 1530px;" rowspan="20">
            <form action="" method="post">

            <?php $i = 1; ?>
            <?php foreach($drugs as $item) :?>
                <div class="input-group mb-3 flex-column">` 
                
                    <h4 class="m-0">    
                        <?= $item ["generic_name"]; ?>
                    </h4>
                    <p><?= $item ["dosage_form"]; ?></p>
                </div>

            <?php $i++; ?>
            <?php endforeach ; ?>
                </form>
            </td>
          
            
        </tr>
        <tr>
            <td>
                <a href="../Drugs/Drugs.html"><img src="../gambar/drugs.png" alt="" srcset="" width="40x"><b>Drug</b></a>
            </td>
        </tr>
    
        
        <tr>
            <td style="width: 10%;"><a href="../condition/Condition.html"><img src="../gambar/heart-rate.png" alt="" srcset="" width="40px"> Conditions</a></td>
           
        </tr>
        <tr>
            <td style="width: 10%;" ><a href="../allergies/allergy.html"><img src="../gambar/virus.png" alt="" srcset="" width="40px"> Allergies</a></td>
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