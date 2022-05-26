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
    <title>Healthcare Professional</title>
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

.form-body input {
    border-radius: 0px;
    border: none;
    border-bottom: 1px solid grey;
    background-color: rgba(0, 0, 0, 0);
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
                <div class="row">
                    <div class="col-8">
                        <h1><b>Healthcare Professional Information</b></h1>
                        <div class="row mt-4">
                            <?php
                                require_once '../admin/includes/koneksi.php';
                                $id = $_SESSION['user_id'];
                                $query = "SELECT * FROM healthcare_pro WHERE user_id='$id'";
                                $hasil = mysqli_query($koneksi, $query);
                                foreach ($hasil as $data){   
                            ?>
                            <form method="POST" class="form form-horizontal" novalidate="">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label><b>NPI</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$data['NPI'];?>" type="text" class="form-control"
                                            name="NIP">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Job Title</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$data['job_title'];?>" type="text" class="form-control"
                                            name="job_title">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Specialization</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$data['job_special'];?>" type="text" class="form-control"
                                            name="job_special">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>First Name</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$data['first_name'];?>" type="text" class="form-control"
                                            name="first_name">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Last Name</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$data['last_name'];?>" type="text" class="form-control"
                                            name="last_name">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>ZIP Code</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$data['ZIP_code'];?>" type="text" class="form-control"
                                            name="ZIP_code">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-4">
                        <p><b>My Account</b></p>
                        <a href="logout.php" style="text-decoration: none;">Sign out</a>
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