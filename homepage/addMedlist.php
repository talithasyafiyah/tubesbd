<?php 
session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
include '../admin/includes/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Account</title>
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

.button4:hover {
    background-color: #000000; color:white;}
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
include 'layout/header1.php';
?>

<!-- Content-->
    <div class="container-xxl">
        <div class="main">
            <div class="container mt-lg-5">
                <div class="row row-cols-2">
                    <div class="col-3 border">
                    </div>
                    <div class="col-9 border">
                        <p class="text-start mt-2"><a href="2Medlist.php" style="text-decoration: none;"><i class="fa-solid fa-chevron-left" style="font-size: 10pt;"></i> Cancel</a></p>
                    </div>
                    <div class="col-3 border">
                        <h3 class="mt-2">Get Started</h3>
                            Welcome to the Drugs.com<br> medication management app, <br><b>My Med List</b>. <br><br>

                            To get started, <b>add a new profile</b><br> to your account.
                    </div>
                    <div class="col-9 border">
                        <div class="row">
                            <h3 class="mt-2">Add your first Profile...</h3>
                            <p>
                                A "profile" will contain the list of drugs and conditions for a single individual. In addition to your own personal profile, you may setup other profiles for relatives, friends, patients, etc.
                            </p>
                            <br>
                        </div>
                        <div class="row">
                            <form method="POST" novalidate="">
                                <label><h6>Profile Name</h6></label>
                                <input type="text" id="form" class="form-control" name="profile_name" placeholder="Profile name...">
                                <p style="color: grey;">Examples: "Steve" or "Grandma" or "Patient 192"</p>

                                <label><h6>Emergency Contact (optional)</h6></p></label>
                                <input type="text" id="form" class="form-control" name="emergency_contact" placeholder="Contact phone number...">

                                <label class="mt-4"><h6>Primary Physician (optional)</h6></p></label>
                                <input type="text" id="form" class="form-control" name="primary_physician" placeholder="Physician phone number...">

                                <label class="mt-4"><h6>Other Details (optional)</h6></p></label>
                                <input type="text" id="form" class="form-control" name="other_details" placeholder="Add additional information...">
                                <p style="color: grey;">E.g. other physicians, specialists, pharmacists, medical history, blood type, etc.</p><br>

                                <button type="submit" class="btn btn-lg mb-5" name="btnAdd" style="background-color: rgb(59, 83, 161);  color: white;">Save</button>
                                
                            </form>
                        </div>
                        <div class="row">
                            <?php
                                require_once'../admin/includes/koneksi.php';
                                                    
                                if(isset($_POST['btnAdd'])){
                                    $profile = $_POST['profile_name'];
                                    $emergency = $_POST['emergency_contact'];
                                    $physician = $_POST['primary_physician'];
                                    $other = $_POST['other_details'];
                                    $id = $_SESSION['user_id'];
                                    $sql = "INSERT INTO medlist (profile_name, emergency_contact, primary_physician, other_details, user_id) VALUES ('$profile','$emergency','$physician','$other','$id')";
																			
			                        if($koneksi->query($sql)===TRUE){
                                        echo '<div class="alert alert-primary text-center" role="alert">
                                        <b><b>New Profile added.</b>
                                        </div>';
                                        echo "<script>setTimeout(\"location.href = 'medlistDetails.php';\",1500);</script>";
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
    </div>

    <?php
    include 'layout/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>