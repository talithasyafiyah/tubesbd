<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' href='css/ddc-pack-site.min.2af34de6.css'>
    <link rel='stylesheet' href='css/ddc-print.min.07943132.css' media='print'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>

    <title>Pill Identifier - Drugs.Com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
    <style>
        .isi {
            margin-left: 12px;
            padding-left: 4px;
            font-size: 20px;
        }
        .form-check {
            margin-left: 10px;
            font-size: 15px;
            padding-bottom: 3px;
        }
        .form {
            margin-left: 10px;
        }
        .hint {
          height: 160px;
          width: 230px;
        }
        .popularpill {
          margin-top: 12px;
        }
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
    include 'layout/header.php';
} else {
    include 'layout/header1.php';
}
?>

    <!--CONTENT-->

    <!--Grid Kiri-->
    <!--baris 1-->
    <div class="container mt-5 ">
        <div class="row row-cols-2">
            <div class="col-9">
                <h1><b>Pill Identifier</b></h1>
                <h4><b>Search by Imprint, Shape or Color</b></h4>
                <p> Use the pill finder to identify medications by visual appearance or medicine name. All fields are optional. <br> <b> Tip:</b> Search for the <b>imprint first</b>, then refine by color and/or shape if you have too many results.</p>
                
                <!--Baris 2-->

                <form class="container form-h border shadow-sm p-3 mb-5 bg-white rounded mt-3" style="border-radius: 10px;" action="ResultPI.php" method="POST" >
                  <?php
                  include '../admin/includes/koneksi.php';
                  $query = mysqli_query($koneksi, "SELECT * FROM pill_identifier");
                  ?>
                  <div class="row form ">
                    <div class="form-group col-md-6">
                        <div class="row">
                            <div class="col-md-12 mt-1"
                              <label for="inputEmail4">Pill Imprint</label>
                              <input type="text" class="form-control" id="inputEmail4" name="pill_imprint">
                            </div>
                            <div class="col-md-12 mt-2">
                              <label for="inputState">Color</label>
                              <select id="inputState" class="form-control" name="color">
                                <option selected >Choose..</option>
                                <?php foreach($query as $row){ ?>
                                  <option><?php echo $row['color'] ?></option>
                              <?php  } ?>
                              </select>
                            </div>
                            <div class="col-md-12 mt-2 ">
                              <label for="inputState">Shape</label>
                              <select id="inputState" class="form-control" name="shape">
                                <option selected>Choose...</option>
                                <?php foreach($query as $row){ 
                                ?>
                                <option ><?php echo $row['shape'] ?></option>
                                <?php } ?>
                              </select>
                              
                            </div>
                            <button style="  margin-top: 12px; margin-left: 17px;" type="submit" class="btn btn-primary col-md-3">Search</button>
                        </div>
                    </div>
                    <div class="form-group col md-6">
                      <img src="img/logo/hint.png"  class="hint" style="margin-top: 23px; margin-left: 30px; height:170px; width: 300px;" alt="">
                    </div>
                  </div>       
                  
                  </form>

                  <!--how to identify a pill-->
                  <div class="paragraf2 mt-4 pt-1">
                    <h4>How to identify a pill using the Pill Identifier</h4>
                    <p style="margin-left: 10px; line-height: 32px;">1. Enter the imprint code that appears on the pill. example : L484<br>
                      2. Select the the pill color (optional). <br>
                      3. Select the Shape (optional). <br>
                      4. Alternatively. search by <b>drug name</b> or <b>NDR Code</b> using the fields below.
                    </p>
                  </div>

                  <!--hiasan aja-->
                  <div class="spinner-grow text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-secondary" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-success" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-warning" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-info" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-dark" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>

                  <br>
                  <br>
                  <!--popular pill imprints-->
                  <div class="">
                      <h2 style="margin-bottom: 25px;">Popular Pill Imprints</h2>
                      <div class="container">
                        <div class="popularpill row">
                          
                        <div class="col-3">
                                    <?php 
                                    include '../admin/includes/koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT * FROM pill_identifier");
                                    foreach($query as $row){ ?>
                                            <form action="pillidentifierdetails.php" method="POST">
                                                <input hidden type="text" name="identifier_id" value=<?php echo $row["identifier_id"]; ?>>
                                                <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                                                    <?php echo $row["pill_imprint"]; ?> 
                                                </button>
                                            </form>
                                    <?php } ?>

                                  </div>
                      </div>                        
                      </div>
                      <br>
                    

                  </div>
            </div>
                                      
        </div> 
    </div>
     
<?php
include 'layout/footer.php';
?>


<!--Script-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" ></script>
<script src="js/jquery-3.6.0.min.js" ></script>
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
</body>
</html>