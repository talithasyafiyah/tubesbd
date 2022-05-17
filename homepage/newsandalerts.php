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
    <title>Drugs.com - <?=$page;?></title>
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
            <h1><b>Pharmaceutical News and Articles</b></h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search News"  aria-describedby="button-addon2">
                <button type="button" class="btn btn-primary">Search</button>
            </div>
            <br>
        
            <div class="container">
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

        <div class="col-md-4 py-5">
            <div class="alert alert-secondary" role="alert">
                <h4>Subscribe to our newsletters</h4>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    FDA Safety Alerts
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Daily MedNews
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Monthly Newsletter
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    I accept the Terms and Privacy Policy
                </label>
              </div>
              <div class="form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email Address" aria-label="Email address" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2">Subscribe</button>
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
