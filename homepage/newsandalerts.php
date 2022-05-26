<?php
/* session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='.pages/login.php'</script>";
   } */
$page = "New Drug Approvals";
require_once '../admin/includes/koneksi.php';

/* $username = $_SESSION['username']; */
$query = mysqli_query($koneksi, "SELECT * FROM drug_approval where approval_id = 'approval_id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>News & Alerts - Drugs.com</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>
    <style>
        a{
            text-decoration: none;
        }
     
    </style>
</head>
<body>
<?php
session_start();
if(empty($_SESSION['level'])) {
    include 'layout/header.php';
} else {
    include 'layout/header1.php';
}
?>
    <div class="container">
        <div class="row">
          <div class="col-md-8 py-5">
            <div class="container">
                <h1><b>Pharmaceutical News and Articles</b></h1>
                <p>Comprehensive and up-to-date drug news for both consumers and healthcare professionals.</p>
            
                <div class="ddc-media-list ddc-mgt-4">
                    <div class="ddc-media">
                        <div class="ddc-media-content">
                        <?php 
                            require_once '../admin/includes/koneksi.php';
                            $query = "SELECT * FROM news";
                            $hasil = mysqli_query($koneksi, $query);
                            foreach($hasil as $data) {
                        ?>
                            <h2 class="ddc-media-title"> <a href="#"> <?php echo $data['title']; ?> </a> </h2>
                                <p class="drug-subtitle"> <?php echo $data['content']; ?> </p>
                                <p class="card-text"><small class="text-muted"> <?php echo strftime("%A, %d %B %Y", strtotime($data['created_at'])) ?> | <?php echo $data['author']; ?> </small></p>
                        <?php } ?>
                        </div>
                        
                    </div>
                </div>
            </div>
                    
            </div>
        </div>
    </div>
<?php
require_once 'layout/footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
