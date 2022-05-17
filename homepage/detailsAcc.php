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
                        <h1><b>Account Details</b></h1>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <a href="overviewAcc.php"><input type="submit" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btnradio1">Overview</label></a>

                                <a href="detailsAcc.php"><input type="submit" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-dark active" for="btnradio2">Details</label></a>
                            </div>
                        <div class="row mt-4">
                            <form method="POST" class="form form-horizontal" novalidate="">
                            <input hidden type="number" name="news_id" value="<?php echo $data['news_id']; ?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label><b>Username</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$_SESSION['username'];?>" type="text" class="form-control"
                                            name="username">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Email</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$_SESSION['email'];?>" type="text" class="form-control"
                                            name="email">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Password</b></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?=$_SESSION['password'];?>" type="password" class="form-control"
                                            name="password">
                                    </div>
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