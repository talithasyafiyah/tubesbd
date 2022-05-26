<?php
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
    
    <title>Healthcare Professional - Drugs.com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include 'layout/header1.php';
    ?>
    
    <div class="container">
        <div class="row gap-3 mt-4">
            <h1><b>Add Your Details</b></h1>
            <div class="col-8">
                <p style="font-size: 13pt;">I am a Healthcare Professional</p>
                <form method="POST">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="Text" class="form-control" id="job_title" name="job_title" placeholder="Job Title">
                        </div>
                        
                        <div class="form-group mt-3">
                            <label>Specialization</label>
                            <input type="Text" class="form-control" id="job_special" name="job_special" placeholder="Job Specialization">
                        <div class="form-group mt-3">
                            <label>NPI Number</label>
                            <input type="Text" class="form-control" id="NPI" name="NPI" placeholder="NPI Number">
                        </div>
                        
                        <div class="form-group mt-3">
                            <label>Zip Code</label>
                            <input type="Text" class="form-control" id="ZIP_code" name="ZIP_code" placeholder="Zip Code">
                            <p style="color: rgb(87, 87, 87) ;">National Provider Identifier (10-digit)</p>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label>First Name</label>
                            <input type="Text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                        </div>
                        
                        <div class="form-group mt-3">
                            <label>Last Name</label>
                            <input type="Text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                        </div>
                        
                        <button type="Submit" name="btnAdd" class="btn btn-lg mt-3" style="background-color: rgb(59, 83, 161); color: white;">Add Details</button>
                        <br>
                    </form>
                <?php
                require_once '../admin/includes/koneksi.php';
                        
                if(isset($_POST['btnAdd'])){
                    $NPI = $_POST['NPI'];
                    $title = $_POST['job_title'];
                    $special = $_POST['job_special'];
                    $first = $_POST['first_name'];
                    $last = $_POST['last_name'];
                    $ZIP = $_POST['ZIP_code'];
                    $user_id = $_SESSION['user_id'];
                    $sql = "INSERT INTO healthcare_pro (NPI, job_title, job_special, first_name, last_name, ZIP_code, user_id) VALUES ('$NPI','$title','$special', '$first', '$last', '$ZIP', '$user_id')";
                                                
                    if($koneksi->query($sql)===TRUE){
                        echo "<script>setTimeout(\"location.href = 'detailsAcc.php';\",1500);</script>";
                        echo "<br><p class='alert alert-primary text-center'><b>Information has been successfully added.</b></p>";
                    } else {
                        echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                    }             
                }
                ?>

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