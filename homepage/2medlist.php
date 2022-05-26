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
    <title>Med List</title>
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
                        <p class="text-end mt-2"><a href="addMedlist.php" style="text-decoration: none;">Add Profile</a></p>
                    </div>
                    <div class="col-9 border"></div>
                    <div class="col-3 border">
                        <h3 class="mt-2">Get Started</h3>
                            Welcome to the Drugs.com<br> medication management app, <br><b>My Med List</b>. <br><br>

                            To get started, <b>add a new profile</b><br> to your account.<br><br>
                            <a href="addMedlist.php"><button type="submit" class="btn btn-lg" style="background-color: rgb(59, 83, 161);  color: white;">Add Profile</button></a><br><br>
                    </div>
                    <div class="col-9 border">
                        <h3 class="mt-2">My Med List</h3>
                        <p>
                            Add your medications to assemble relevant medical information in a simple, easy-to-read, personalized format. Gain immediate access to in-depth consumer information, drug interaction data (including food/allergy/condition interactions), historical news, and FDA alerts.
                        </p>
                        <br>
                        <h3>Quick Tip</h3>
                        <p>
                            You can create profiles for you, other family members, friends, etc. You can switch between profiles at anytime.
                        </p>
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