<?php
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
?>

   <!-- navbar -->
    <div class="container-fluid" style="background-image: url('image/nav.jpg');">
    <nav class="navbar navbar-expand-lg ms-5 me-5">
            <a class="navbar-brand" href="#"><img src="img/Drugs_002.png" width="380"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link px-2" href="./drug.php" id="nav">Drugs A-Z</a>
                <a class="nav-link ms-3 me-1 px-1" href="./imprint.php" id="nav">Pill Identifier</a>
                <a class="nav-link ms-3 me-1 px-1" href="#" id="nav">Interactions Checker</a>
                <a class="nav-link ms-3 me-1 px-1" href="./new_drugs.php" id="nav">New Drugs</a>
                <a class="nav-link ms-3 me-1 px-1" href="#" id="nav">Pro Edition</a>
                <a class="nav-link ms-3 me-1 px-1" href="#" id="nav">More</a>
                <div class="dropdown">
                <a class="btn dropdown-toggle ms-3 me-1 px-2 bg-light" style="border: 0.5px solid black;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <?=$_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Account Settings</a></li>
                    <li><a class="dropdown-item" href="#">My Med List</a></li>
                    <li><a class="dropdown-item" href="./logout.php"><button type="button" class="btn mb-4" style="background-color: rgb(59, 83, 161); color: white;">Sign Out</button></a></li>
                </ul>
                </div>
            </div>
            </div>
        
        </nav>
        <div class="container">
            <b><h1 class="text-center">Find Drugs & Conditions</h1></b>
            <div class="row mt-3">
                <div class="box mx-auto shadow-lg">
                    <input type="search" placeholder="Enter a drug name, condition, pill imprint, etc.">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="row">
                <p class="text-center mt-4" style="font-size: 11pt;">Trending searches: amlodipine, gabapentin, aspirin, lisinopril, prednisone</p>
            </div>
        </div>
    </div>