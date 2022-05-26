<!--Navbar-->
<header>
  <div class="container-fluid shadow-sm">
    <div class="container">
        <div class="top-container">
            <div class="row">
                <div class="col-3">
                    <a class="logo" href="index.php">
                    <img src="img/drugscom-logo.svg" class="mt-4" alt="">
                    </a> 
                </div>
                <div class="col-8 mt-lg-4">
                    <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Search" name="search2" id="search2">
                    
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      All<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">All</a></li>
                      <li><a class="dropdown-item" href="#">Consumer</a></li>
                      <li><a class="dropdown-item" href="#">Professional</a></li>
                      <li><a class="dropdown-item" href="#">Pill ID</a></li>
                      <li><a class="dropdown-item" href="#">Interactions</a></li>
                      <li><a class="dropdown-item" href="#">News</a></li>
                      <li><a class="dropdown-item" href="#">FDA Alerts</a></li>
                      <li><a class="dropdown-item" href="#">Approvals</a></li>
                      <li><a class="dropdown-item" href="#">Pipeline</a></li>
                      <li><a class="dropdown-item" href="#">Clinical Trials</a></li>
                      <li><a class="dropdown-item" href="#">Care Notes</a></li>
                      <li><a class="dropdown-item" href="#">Natural Products</a></li>
                    </ul>
                    <button class="btn btn-outline-success" type="submit" style="background-color: rgb(40, 93, 185); color: white;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <a class="nav-link ms-3 me-1 px-1" href="./register.php" style="color: blue; font-size: 11pt;">Register</a>
                    <a class="nav-link ms-3 me-1 px-1" href="./login.php" id="nav1" style="background-color: white; border-radius: 5px; width: 80px; text-align: center; border: .5px solid black;">Sign In</a>  
                  </div>
                    
                   <div class="cari"> Browse all medications: 
                    <a href="#">A</a>
                    <a href="#">B</a>
                    <a href="#">C</a>
                    <a href="#">D</a>
                    <a href="#">E</a>
                    <a href="#">F</a>
                    <a href="#">G</a>
                    <a href="#">H</a>
                    <a href="#">I</a>
                    <a href="#">J</a>
                    <a href="#">K</a>
                    <a href="#">L</a>
                    <a href="#">M</a>
                    <a href="#">N</a>
                    <a href="#">O</a>
                    <a href="#">P</a>
                    <a href="#">Q</a>
                    <a href="#">R</a>
                    <a href="#">S</a>
                    <a href="#">T</a>
                    <a href="#">U</a>
                    <a href="#">V</a>
                    <a href="#">W</a>
                    <a href="#">X</a>
                    <a href="#">Y</a>
                    <a href="#">Z</a>
                    <a href="#">0-9</a>
                   </div>
                </div>
            </div>
                <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto" >
                      <a class="nav-link" href="./drugsaz1.php" style="color:black;">DRUGS A-Z</a>
                      <a class="nav-link" href="./imprint.php" style="color:black;">PILL IDENTIFIER</a>
                      <a class="nav-link" href="./treatment.php" style="color:black;">TREATMENT GUIDES</a>
                      <a class="nav-link" href="./newsandalerts.php" style="color:black;">NEWS & ALERTS</a>
                      <a class="nav-link" href="./new_drugs.php" style="color:black;">NEW DRUGS</a>
                    </div>
                  </div>
                </div>
                </nav>
        </div>
    </div>
    </header>
    </div>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.autocomplete.min.js"></script>
       <script>
        
        $(document).ready(function() {
            // Selector input yang akan menampilkan autocomplete.
            $( "#search2" ).autocomplete({
                serviceUrl: "source.php",   // Kode php untuk prosesing data.
                dataType: "JSON",           // Tipe data JSON.
                onSelect: function (suggestion) {
                    $( "#search2" ).val("" + suggestion.drugs)     
                             
                }

            });

        })
   
  </script>