<?php
/* session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='.pages/login.php'</script>";
   } */
$page = "Result";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?=$page;?> - Drugs.com</title>
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
            <h1><b>Result.</b></h1>

            <br>
            <?php
            require_once '../admin/includes/koneksi.php';
            if (isset($_POST['submit-search'])) {
                $search2 = trim($_POST["search2"]);
                $sql= "SELECT * FROM drugs WHERE drug_name like '%$search2%' ";        
                $result = mysqli_query($koneksi, $sql);
                $queryResult = mysqli_num_rows($result);
        
                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <div class="ddc-media-list ddc-mgt-4">
                    <div class="ddc-media">

                        <div class="ddc-media-content">
                            <form action="drugsdetail1.php" method="POST">
                            <input hidden type="text" name="drug_id" value="<?php echo $row["drug_id"]; ?>" >
                            <button type="submit" name="nt" class="btn btn-success text-start" style="background-color: rgb(40, 93, 185, 0); border: none;">  
                               <h2 class="ddc-media-title text-primary">
                                    <?php echo $row["drug_name"]; ?> 
                               </h2>
                               </button>
                               </form>
                                <p class="drug-subtitle">
                                <p><?=$row['definition']; ?></p>

                            
               
                        </div>
                        <?php  }
        } else {
           
        }
        

    } ?>
    <?php
     
     require_once '../admin/includes/koneksi.php';
     if (isset($_POST['submit-search'])) {
         $search2 = trim($_POST["search2"]);
         $sql= "SELECT * FROM treatment WHERE treatment_name like '%$search2%' ";        
         $result = mysqli_query($koneksi, $sql);
         $queryResult = mysqli_num_rows($result);
         
         if ($queryResult > 0) {
            echo "<h2> Result Treatment : </h2> <br>";
             while ($row = mysqli_fetch_assoc($result)) {
     ?>

         <div class="ddc-media-list ddc-mgt-4">
             <div class="ddc-media">
             

                 <div class="ddc-media-content">
                     <form action="drugsdetail1.php" method="POST">
                     <input hidden type="text" name="drug_id" value="<?php echo $row["treatment_id"]; ?>" >
                     <button type="submit" name="nt" class="btn btn-success text-start" style="background-color: rgb(40, 93, 185, 0); border: none;">  
                        <h2 class="ddc-media-title text-primary">
                             <?php echo $row["treatment_name"]; ?> 
                        </h2>
                        </button>
                        </form>
                         <p class="drug-subtitle">
                         <p><?=$row['medication']; ?></p>

                     
        
                 </div>
                 <?php  }
 } else {
    
 }
}
 ?>
 
      <?php
            require_once '../admin/includes/koneksi.php';
            if (isset($_POST['submit-search'])) {
                $search = trim($_POST["search2"]);
                $sql= "SELECT * FROM news LEFT JOIN drug_approval ON news.news_id= drug_approval.approval_id WHERE title LIKE '%$search%' or new_drug like '%$search%'  UNION SELECT * FROM news RIGHT JOIN drug_approval ON news.news_id= drug_approval.approval_id  WHERE  new_drug LIKE '%$search%' or title like '%$search%'";        
                $result = mysqli_query($koneksi, $sql);
                $queryResult = mysqli_num_rows($result);
        
                if ($queryResult > 0) {
                    echo "<h2> Result News : </h2> <br>";
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="ddc-media-list ddc-mgt-4">
                    <div class="ddc-media">
                        <div class="ddc-media-content">

                            <h2 class="ddc-media-title"><a href="/pro/alymsys.html"><?=$row['title']; ?></a></h2>
                                <p class="drug-subtitle">
                                <p><?=$row['content']; ?></p>
                            <h2 class="ddc-media-title"><a href="/pro/alymsys.html"><?=$row['new_drug']; ?></a></h2>
                                <p class="drug-subtitle">
                                <p><?=$row['content']; ?></p>
               
                        </div>
                        <?php  }
        } else {
           
        }
    } ?>
                        
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
