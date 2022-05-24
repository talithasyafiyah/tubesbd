<?php
session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
require 'functions.php';

if( isset($_POST["submit"]) ) {

    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'medlistdetails.php'
            </script>
       ";
   } else {
       echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'medlistdetails.php'
            </script>
   ";
   }
   

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    
    <title>Add Medlist - Drugs.com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <?php
    include 'layout/header1.php';
    ?>
    <div class="container">
        <table style="width: 90%; border: 1px solid gray;  border-collapse:collapse; margin-top:80px" align="center" >
            <tr>
                <td style="width: 30%;"><a href="medlistdetails.php" style="color: blue;"> <i class="fa-solid fa-chevron-left"></i> Med List</a> </td>
                <td  style="text-align: right;"  ></td>
            </tr>
            <tr>
                <td style="width: 10%;;"><a href="../profile_info/profile.html"><i class="fa-solid fa-user"></i> Profil</a></td>
                <td style="border: none; " rowspan="20">
                    <ul>
                    <h4>Add your Medlist...</h4>  
                    <span>Add Medlist to your profile to start building a medication record. Gain instant access to interactions, warnings, and alerts.</span> <br> <br>
                    </ul>

                    <form action="" class=" " method="post">
                        <ul>
                            <div class="form-group col-8">
                                <label style="font-size:17px ;" class="mb-1 " for="drugs">Add Drug</label>
                                <input type="text" name="drugs" id="drugs" class="form-control mb-3" placeholder="Insert Your Drug " required autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label style="font-size:17px ;" class="mb-1 " for="condition">Add Condition</label>
                                <input type="text" name="condition" id="condition" class="form-control mb-3" placeholder="Insert Your condition " required autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label style="font-size:17px ;" class="mb-1 " for="allergy">Add Allergy</label>
                                <input type="text" name="allergy" id="allergy" class="form-control mb-3" placeholder="Insert Your allergy " required autocomplete="off">
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Add Medlist</a></button>
                        </ul>
                    </form>
                    
                    
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
                <td style="width: 30%;"><a href="../notes/notes.html"><i class="fa-solid fa-memo-pad"></i> Notes</a></td>
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