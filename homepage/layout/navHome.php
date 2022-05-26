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
                <a class="nav-link ms-3 me-1 px-1" href="./register.php" style="color: blue;">Register</a>
                <a class="nav-link ms-3 me-1 px-1" href="./login.php" id="nav1" style="background-color: white; border-radius: 5px; width: 80px; text-align: center; border: .5px solid black;">Sign In</a>
                
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
  