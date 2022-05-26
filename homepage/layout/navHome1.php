<?php
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
?>

   <!-- navbar -->
    <div class="container-fluid" style="background-image: url('img/nav.jpg');">
    <nav class="navbar navbar-expand-lg ms-5 me-5">
            <a class="navbar-brand" href="#"><img src="img/Drugs_002.png" width="380"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link px-2" href="./drugsaz1.php" id="nav">Drugs A-Z</a>
                <a class="nav-link ms-3 me-1 px-1" href="./imprint.php" id="nav">Pill Identifier</a>
                <a class="nav-link ms-3 me-1 px-1" href="./treatment.php" id="nav">Treatment Guides</a>
                <a class="nav-link ms-3 me-1 px-1" href="./new_drugs.php" id="nav">New Drugs</a>
                <a class="nav-link ms-3 me-1 px-1" href="./newsandalerts.php" id="nav">News & Alerts</a>
                <div class="dropdown">
                <a class="btn dropdown-toggle ms-3 me-1 px-2 bg-light" style="border: 0.5px solid black;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <?=$_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="./overviewAcc.php">Account Settings</a></li>
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
                                    My Med List
                                </button>
                            </form>";
                        } else {
                          echo '<li><a class="dropdown-item" href="1medlist.php">My Med List</a></li>';
                        }
                        ?>
                    <li><button type="button" class="btn mb-4 ms-3" style="background-color: rgb(59, 83, 161); color: white;"><a href="./logout.php" style="color: white; text-decoration: none;">Sign Out</button></a></li>
                </ul>
                </div>
            </div>
            </div>
        
        </nav>
        <div class="container">
            <b><h1 id="judul" class="text-center">Find Drugs & Conditions</h1></b>
            <div class="row mt-3">
                <form action="ResultDrug.php" method="POST">
                <div class="box mx-auto shadow-lg">
                    <input type="text" name="search" id="search"  style="background-color: rgb(40, 93, 185, 0); border: none;" placeholder="Enter a drug name.">
                    <button type="submit" name="submit-search" style="background-color: rgb(40, 93, 185, 0); color: rgb(82, 82, 82); border: none;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                </form>
            </div>
            <div class="row">
                <p class="text-center mt-4" style="font-size: 11pt;">Trending searches: abifily, gabapentin, caplyta, kadcyla, plavix</p>
            </div>
        </div>
    </div>