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
    <title>Overview Account</title>
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

.button4:hover {background-color: #000000; color:white;}
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

a {
    text-decoration: none;
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
                    <div class="col">
                        <h1><b>Your Account</b></h1>
                            <div class="btn-group mt-2" role="group" aria-label="Basic radio toggle button group">
                                <a href="overviewAcc.php"><input type="submit" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-dark active" for="btnradio1">Overview</label></a>

                                <a href="detailsAcc.php"><input type="submit" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btnradio2">Details</label></a>
                            </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-1">
                                <svg class="ddc-icon ddc-icon-edit" width="30" height="30" viewBox="0 0 24 24" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M21.75 20.25v1.5H2v-1.5h19.75zM14.01 2.18c.69-.69 1.8-.69 2.48 0l2.33 2.33c.69.69.69 1.8 0 2.48L7.82 18H3v-4.81zm-1.88 4L4.5 13.82v2.69h2.69l7.62-7.63-2.69-2.68zm3.3-2.94a.25.25 0 00-.36 0L13.2 5.12l2.68 2.7 1.9-1.9a.25.25 0 00.06-.23l-.03-.06-.04-.06z"></path></svg>
                            </div>
                            <div class="col-11">
                                <a href="detailsAcc.php"><h4 class="text-start"> Account Details</h4></a>
                                <p>
                                    Update the details associated with your Drugs.com account including email address, password, and other personal information.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="row">
                            <div class="col-1">
                                <svg class="ddc-icon ddc-icon-medication-guide" width="30" height="30" viewBox="0 0 24 24" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M18 12a2.75 2.75 0 012.75 2.75v5a2.75 2.75 0 11-5.5 0v-5A2.75 2.75 0 0118 12zM12.34 1.5c.4 0 .8.14 1.1.4l.13.11 4.67 4.67c.28.28.46.66.5 1.06l.01.17V11h-1.5V9H13c-.92 0-1.67-.7-1.74-1.6l-.01-.15V3H5.5a.25.25 0 00-.24.2l-.01.05v17.5c0 .12.08.22.2.24l.05.01H14v1.5H5.5c-.92 0-1.67-.7-1.74-1.6l-.01-.15V3.25c0-.92.7-1.67 1.6-1.74l.15-.01h6.84zM19.25 18h-2.5v1.75c0 .65.5 1.18 1.12 1.24L18 21c.69 0 1.25-.56 1.25-1.25V18zm-7.3-1.5V18h-4.6v-1.5h4.6zm6.05-3c-.69 0-1.25.56-1.25 1.25v1.75h2.5v-1.75c0-.65-.5-1.18-1.12-1.24zM13.87 12v1.5H7.34V12h6.54zm-1.12-8.69v3.94c0 .12.08.22.2.24l.05.01h3.94L12.75 3.3z"></path></svg>
                            </div>
                            <div class="col-11">
                                <?php
                                require_once '../admin/includes/koneksi.php';

                                $id = $_SESSION['user_id'];
                                $result = mysqli_query($koneksi, "SELECT * FROM medlist WHERE user_id = '$id'");
                                
                                if( mysqli_num_rows($result) === 1 ) {
                                    $user_id = $_SESSION['user_id'];
                                    $query = mysqli_query($koneksi, "SELECT medlist.medlist_id FROM medlist WHERE medlist.user_id = '$user_id'");
                                    $query2= mysqli_fetch_array($query); 
                                
                                echo "<form action='medlistdetails.php' method='POST'>
                                        <input hidden type='text' name='medlist_id' value=".$query2['medlist_id'].">
                                        <button type='submit' name='nt' class='btn text-start'  style='background-color: rgb(40, 93, 185, 0); border: none;'>  
                                            <h4 class='text-primary'>My Med List</h4>
                                        </button>
                                    </form>";
                                } else {
                                echo "<button type='submit' name='nt' class='btn text-start'  style='background-color: rgb(40, 93, 185, 0); border: none;'>  
                                            <a href='1medlist.php'><h4 class='text-primary'>My Med List</h4></a>
                                        </button>";
                                }
                                ?>
                                <p>
                                    Manage your list of drugs and conditions, with detailed interaction warnings. Get notified of new treatments or alerts.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="row">
                            <div class="col-1">
                                <svg class="ddc-icon ddc-icon-mobile" width="30" height="30" viewBox="0 0 24 24" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M16.25 2.5c.97 0 1.75.78 1.75 1.75v16c0 .97-.78 1.75-1.75 1.75h-8.5C6.78 22 6 21.22 6 20.25v-16c0-.97.78-1.75 1.75-1.75zM16.5 5h-9v15h9V5zM11 16v1.5H9.5V16H11zm0-3v1.5H9.5V13H11zm3.5 0v1.5H13V13h1.5zM11 10v1.5H9.5V10H11zm3.5 0v1.5H13V10h1.5zM11 7v1.5H9.5V7H11zm3.5 0v1.5H13V7h1.5z"></path></svg>
                            </div>
                            <div class="col-11">
                                <a href=""><h4 class="text-start"> Mobile Apps</h4></a>
                                <p>
                                    Identify pills, access drug and treatment information, and find the latest drug news on the go.
                                </p>
                            </div>
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