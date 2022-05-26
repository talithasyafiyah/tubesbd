<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Drugs.com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e7d76cb66.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://masrud.com/cloudme.fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        body {
    font-family: 'Roboto', Arial, Sans-serif;
    font-size: 15px;
    font-weight: 400;
}

input[type=text] {
    border: 2px solid #bdbdbd;
    font-family: 'Roboto', Arial, Sans-serif;
    font-size: 15px;
    font-weight: 400;
    padding: .5em .75em;
    width: 300px;
}
input[type=text]:focus {
    border: 2px solid #757575;
    outline: none;
}
.autocomplete-suggestions {
    border: 1px solid #999;
    background: #FFF;
    overflow: auto;
}
.autocomplete-suggestion {
    padding: 2px 5px;
    white-space: nowrap;
    overflow: hidden;
}
.autocomplete-selected {
    background: #F0F0F0;
}
.autocomplete-suggestions strong {
    font-weight: normal;
    color: #3399FF;
}
.autocomplete-group {
    padding: 2px 5px;
}
.autocomplete-group strong {
    display: block;
    border-bottom: 1px solid #000;
}
    </style>
</head>
<body>

<?php
session_start();
if(empty($_SESSION['level'])) {
    include 'layout/navHome.php';
} else {
    include 'layout/navHome1.php';
}
require_once '../admin/includes/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM news WHERE news_id = 51");
$query2= mysqli_fetch_array($query); 
?>

    <!-- icon carousel -->
    <section>
        <div class="container-fluid shadow p-3 mb-5 bg-body rounded">
            <div class="container">
                <div class="row mt-2 mb-2">
                    <div class="owl-carousel owl-theme">
                        <!-- item -->
                        <div class="item">
                            <div class="card border-0" style="width: 110px;">
                                <a href="drugsaz1.php"><img src="https://www.drugs.com/img/home/drugs-az.png" alt="image" class="card-img-top"></a>
                                <span style="font-size: 13pt; font-weight: 550;" class="text-center mt-3"><a href="drugsaz1.php" style="color: black; text-decoration: none;">Drugs & Medications</span></a>
                            </div>
                        </div>
                        <!-- end item -->
                        <!-- item -->
                        <div class="item">
                            <div class="card border-0" style="width: 110px;">
                                <a href="imprint.php"><img src="https://www.drugs.com/img/home/pill-identifier.png" alt="image" class="card-img-top"></a>
                                <span style="font-size: 13pt; font-weight: 550;" class="text-center mt-3"><a href="imprint.php" style="color: black; text-decoration: none;">Pill<br>Identifier</span></a>
                            </div>
                        </div>
                        <!-- end item -->
                        <!-- item -->
                        <div class="item">
                            <div class="card border-0" style="width: 110px;">
                                <a href="treatment.php"><img src="https://www.drugs.com/img/home/treatment-guides.png" alt="image" class="card-img-top"></a>
                                <span style="font-size: 13pt; font-weight: 550;" class="text-center mt-3"><a href="treatment.php" style="color: black; text-decoration: none;">Treatment<br>Guides</span></a>
                            </div>
                        </div>
                        <!-- end item -->
                        <!-- item -->
                        <div class="item">
                            <div class="card border-0" style="width: 110px;">
                                <img src="https://www.drugs.com/img/home/my-med-list.png" alt="image" class="card-img-top">
                                <span style="font-size: 13pt; font-weight: 550;" class="text-center mt-3">My <br>Med List</span> 
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    

    <!-- conten -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                            <label class="btn btn-outline-dark btn-lg" for="btnradio1">Browse Drugs</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <form action="alpha.php" method="POST">
                        <ul id="alphabet">
                            <li><button type="submit" name="A" class="btn btn-outline-dark">A</button></li>
                            <li><button type="submit" name="B" class="btn btn-outline-dark">B</button></li>
                            <li><button type="submit" name="C" class="btn btn-outline-dark">C</button></li>
                            <li><button type="submit" name="D" class="btn btn-outline-dark">D</button></li>
                            <li><button type="submit" name="E" class="btn btn-outline-dark">E</button></li>
                            <li><button type="submit" name="F" class="btn btn-outline-dark">F</button></li>
                            <li><button type="submit" name="G" class="btn btn-outline-dark">G</button></li>
                            <li><button type="submit" name="H" class="btn btn-outline-dark">H</button></li>
                            <li><button type="submit" name="I" class="btn btn-outline-dark">I</button></li>
                            <li><button type="submit" name="J" class="btn btn-outline-dark">J</button></li>
                            <li><button type="submit" name="K" class="btn btn-outline-dark">K</button></li>
                            <li><button type="submit" name="L" class="btn btn-outline-dark">L</button></li>
                            <li><button type="submit" name="M" class="btn btn-outline-dark">M</button></li>
                            <li><button type="submit" name="N" class="btn btn-outline-dark">N</button></li>
                            <li><button type="submit" name="O" class="btn btn-outline-dark">O</button></li>
                            <li><button type="submit" name="P" class="btn btn-outline-dark">P</button></li>
                            <li><button type="submit" name="Q" class="btn btn-outline-dark">Q</button></li>
                            <li><button type="submit" name="R" class="btn btn-outline-dark">R</button></li>
                            <li><button type="submit" name="S" class="btn btn-outline-dark">S</button></li>
                            <li><button type="submit" name="T" class="btn btn-outline-dark">T</button></li>
                            <li><button type="submit" name="U" class="btn btn-outline-dark">U</button></li>
                            <li><button type="submit" name="V" class="btn btn-outline-dark">V</button></li>
                            <li><button type="submit" name="W" class="btn btn-outline-dark">W</button></li>
                            <li><button type="submit" name="X" class="btn btn-outline-dark">X</button></li>
                            <li><button type="submit" name="Y" class="btn btn-outline-dark">Y</button></li>
                            <li><button type="submit" name="Z" class="btn btn-outline-dark">Z</button></li>
                            <li><button type="submit" class="btn btn-outline-dark">0-9</button></li>
                            <li><button type="submit" class="btn btn-outline-dark">Advanced Search</button></li>
                        </ul>
                    </form>
                    <p>Browse A-Z: Drug, Treatment, Condition or Class</p>
                </div>
            </div>
            <div class="col">
                <button type="button" class="btn btn-dark btn-lg">Browse by Site Section</button>
                <div class="row mt-4 mb-5">
                    <div class="col">
                        <a href="drugsaz1.php" style="text-decoration: none;"><p>Drugs A-Z</p></a>
                        <a href="" style="text-decoration: none;"><p>Manage your Meds</p></a>
                        <a href="" style="text-decoration: none;"><p>Mobile Apps</p></a>
                    </div>
                    <div class="col">
                        <a href="" style="text-decoration: none;"><p>Health Professionals</p></a>
                        <a href="newsandalerts.php" style="text-decoration: none;"><p>Medical News</p></a>
                        <a href="new_drugs.php" style="text-decoration: none;"><p>New Drugs</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content2 -->
    <div class="container-fluid mb-5" style="background-color: rgb(226, 226, 226);">
        <div class="container" style="background-color: rgb(226, 226, 226);"> 
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                <div class="col mb-5 mt-5">
                    <div class="card h-100">
                    <img src="https://www.drugs.com/img/home/tile-banner-fda.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title" style="color: red;">FDA Medwatch Alerts</h6>
                        <p class="card-text"><b>FDA Issues Warning Letters to Companies Illegally Selling CBD and Delta-8 THC Products</b></p>
                    </div>
                    </div>
                </div>
                <div class="col mb-5 mt-5">
                    <div class="card h-100">
                    <img src="https://www.drugs.com/img/home/tile-banner-new-drugs.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">New Drug Approvals</h6>
                        <p class="card-text"><b><a href="new_drugs.php" style="color: black">FDA Approves Cuvrior (trientine tetrahydrochloride) Tablets for Wilson's disease</a></b></p>
                    </div>
                    </div>
                </div>
                <div class="col mb-5 mt-5">
                    <div class="card h-100">
                    <img src="<?=$query2['picture'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Medical News</h6>
                        <p class="card-text"><b><a href="newsandalerts.php" style="color: black"><?=$query2['title'];?></a></b></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>

    <!-- content3 -->
    <div class="container">
        <div class="row">
            <div class="col-3">
               <h4><b>Drug Information</b></h3>
                <div class="row">
                    <div class="col">
                        <a href="drugsaz1.php" style="text-decoration: none;"><p>A-Z Drug List</p></a>
                        <a href="treatment.php" style="text-decoration: none;"><p>Treatment Options</p></a>
                        <a href="drugsaz1.php" style="text-decoration: none;"><p>Drugs by Class</p></a>
                    </div>
                    <div class="col">
                        <a href="new_drugs.php" style="text-decoration: none;"><p>New Drugs</p></a>
                        <a href="newsandalerts.php" style="text-decoration: none;"><p>News</p></a>
                        <a href="drugsaz1.php" style="text-decoration: none;"><p>Dosage</p></a>
                    </div>
                </div>
            </div>

            <div class="col-7">
                <p><b>Drugs.com</b> is the most popular, comprehensive and up-to-date source of drug information online. Providing free, peer-reviewed, accurate and independent data on more than 24,000 prescription drugs, over-the-counter medicines & natural products.</p>
                
                <?php 
                    require_once '../admin/includes/koneksi.php';
                    $query = "SELECT * FROM news WHERE news_id BETWEEN 36 AND 52";
                    $hasil = mysqli_query($koneksi, $query);
                    foreach($hasil as $data) {
                ?>
                <div class="card mb-3" style="width: auto;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="<?php echo $data['picture']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['title']; ?> </h5>
                            <p class="card-text"> <?php echo $data['content']; ?> </p>
                            <p class="card-text"><small class="text-muted"> <?php echo strftime("%A, %d %B %Y", strtotime($data['created_at'])) ?> | <?php echo $data['author']; ?> </small></p>
                        </div>
                        </div>
                    </div>
                </div>

                <?php 
                    }
                ?>

            </div>
            <div class="col-2">
                <div class="box1 text-center">
                    <img src="img/user.png" alt="" width="55" class="mt-3 mb-3">
                    <button type="button" class="btn mb-4" style="background-color: rgb(59, 83, 161); color: white;">My Med List</button>
                </div>
            </div>

        </div>
    </div>

<?php
include 'layout/footer.php';
?>   
    
    <!-- bootstrap js bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- owl carousel min. js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/script.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.autocomplete.min.js"></script>
    <script>
        
            $(document).ready(function() {
                // Selector input yang akan menampilkan autocomplete.
                $( "#search" ).autocomplete({
                    serviceUrl: "source.php",   // Kode php untuk prosesing data.
                    dataType: "JSON",           // Tipe data JSON.
                    onSelect: function (suggestion) {
                        $( "#search" ).val("" + suggestion.drugs)     
                                 
                    }

                });

            })
       
    </script>
</body>
</html>