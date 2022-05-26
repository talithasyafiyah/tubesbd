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
                <div class="col-7 mt-lg-4">
                <form action="Result1.php" method="POST">
                   <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Search" name="search2" id="search2">
                    
                    <button  class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" type="button">
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
                    <button name="submit-search" class="btn btn-outline-success" type="submit" style="background-color: rgb(40, 93, 185); color: white;"><i class="fa-solid fa-magnifying-glass"></i></button>
  
                  </div>
                  </form>
                    
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
                <div class="col mt-lg-4">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <?=$_SESSION['username']; ?>
                    </button>
                      <ul class="dropdown-menu dropdown-menu-end">
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
                    serviceUrl: "source3.php",   // Kode php untuk prosesing data.
                    dataType: "JSON",           // Tipe data JSON.
                    onSelect: function (suggestion) {
                        $( "#search2" ).val("" + suggestion.drugs)     
                                 
                    }

                });

            })
       
    </script>