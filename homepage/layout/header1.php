<!--Navbar-->
<header>
  <div class="container-fluid shadow-sm">
    <div class="container">
        <div class="top-container">
            <div class="row">
                <div class="col">
                    <a class="logo" href="index.php">
                    <img src="img/drugscom-logo.svg" alt="" width="300" height="90">
                    </a> 
                </div>
                <div class="col-7 mt-lg-4">
                    <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Search">
                    
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
                    <a class="adsearch" href="#">Advanced Search</a>
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
                        <li><a class="dropdown-item" href="./logout.php"><button type="button" class="btn btn-primary">Sign Out</button></a></li>
                    </ul>
                </div>
            </div>
                <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto" >
                      <a class="nav-link" href="./drugsaz1.php" style="color:black;">DRUGS A-Z</a>
                      <a class="nav-link" href="./imprint.php" style="color:black;">PILL IDENTIFIER</a>
                      <a class="nav-link" href="#" style="color:black;">INTERACTIONS CHECKER</a>
                      <a class="nav-link" href="#" style="color:black;">NEWS & ALERTS</a>
                      <a class="nav-link" href="#" style="color:black;">PRO EDITION</a>
                      <a class="nav-link" href="#" style="color:black;">MORE</a>
                    </div>
                  </div>
                </div>
                </nav>
        </div>
    </div>
    </header>
    </div>