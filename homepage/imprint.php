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

                <form class="container form-h border shadow-sm p-3 mb-5 bg-white rounded mt-3" style="border-radius: 10px;">
                  

                  <div class="row form ">
                    <div class="form-group col-md-6">
                        <div class="row">
                            <div class="col-md-12 mt-1"
                              <label for="inputEmail4">Pill Imprint</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-12 mt-2">
                              <label for="inputState">Color</label>
                              <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="col-md-12 mt-2 ">
                              <label for="inputState">Shape</label>
                              <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
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
                  
                  <br>

                  <!--Searcing bar 1-->
                  <form>
                    <div>
                      <h3>Search by Drug Name</h3>
                    </div>
                    <div class="form-row align-items-center">
                      <div class="col-md-10">
                        <label class="sr-only" for="inlineFormInput">Drugname</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Enter a drug name, e.g aspirin">
                      </div>
                      <div class="col-auto">
                        <button type="search" class="btn btn-primary mb-2">Search</button>
                      </div>
                    </div>
                  </form>

                  <!--Searcing bar 2-->
                  <form>
                    <div>
                      <h3>Search by National Drug Codes (NDC)</h3>
                    </div>
                    <div class="form-row align-items-center">
                      <div class="col-md-10">
                        <label class="sr-only" for="inlineFormInput">Drugname</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Enter an NDC Code, e.g 0777-3105-02">
                      </div>
                      <div class="col-auto">
                        <button type="search" class="btn btn-primary mb-2">Search</button>
                      </div>
                    </div>
                    <div>
                      <p class="text-primary" style="font-size: 14px;">What is an NDC Number?</p>
                    </div>
                  </form>

                  <br>

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


                  <!--popular pill imprints-->
                  <div class="">
                      <h2 style="margin-bottom: 25px;">Popular Pill Imprints</h2>
                      <div class="container">
                        <div class="popularpill row">
                          <div class="col">
                            <a href="">30 M</a>
                          </div>
                          <div class="col">
                            <a href="">512</a>
                          </div>
                          <div class="col">
                            <a href="">4H2</a>
                          </div>
                          <div class="col">
                            <a href="">H 49</a>
                          </div>
                        </div>
                        <div class="popularpill row">
                          <div class="col">
                            <a href="">M367</a>
                          </div>
                          <div class="col">
                            <a href="">M366</a>
                          </div>
                          <div class="col">
                            <a href="">R180</a>
                          </div>
                          <div class="col">
                            <a href="">LUPIN 500</a>
                          </div>
                        </div>
                        <div class="popularpill row">
                          <div class="col">
                            <a href="">M365</a>
                          </div>
                          <div class="col">
                            <a href="">S 90 3</a>
                          </div>
                          <div class="col">
                            <a href="">R P 5 325</a>
                          </div>
                          <div class="col">
                            <a href="">R P 10</a>
                          </div>
                        </div>
                        <div class="popularpill row">
                          <div class="col">
                            <a href="">L484</a>
                          </div>
                          <div class="col">
                            <a href="">AN 627</a>
                          </div>
                          <div class="col">
                            <a href="">R 0 3 9</a>
                          </div>
                          <div class="col">
                            <a href="">377</a>
                          </div>
                        </div>
                        <div class="popularpill row">
                          <div class="col">
                            <a href="">RP 10 325</a>
                          </div>
                          <div class="col">
                            <a href="">PLIVIA 433</a>
                          </div>
                          <div class="col">
                            <a href="">U03</a>
                          </div>
                          <div class="col">
                            <a href="">TEVA 3927</a>
                          </div>
                        </div>                        
                      </div>
                      <br>
                      
                      <!--Learn More-->
                      <div class="">
                        <h2>Learn More</h2>
                        <p style="margin-left: 12px;">
                          <ul>
                            <li>
                              <b>What if my pill has no imprint code?</b> All prescription and over-the-counter (OTC) drugs in the U.S. are required by  the FDA to have an imprint code. If your pill has no imprint it could be a vitamin, diet, herbal, or energy pill, or an illicit or foreign drug. It is not possible to accurately identify a pill online without an imprint code.
                              
                            </li>
                            <li>
                              <b>What if my pill has a logo?</b> If your pill has a logo, you can ignore the logo and type in any other letters or numbers in the imprint code. If you want 
                              to refine your results further, you can add the word Logo in place of the logo.
                            </li>
                            <li>
                              <b>Historical pill images.</b> The Drugs.com Pill Identifier database includes historical
                               data for many products that may be discontinued or no longer commercially available.
                            </li>
                            <li>
                              <a href="">Imprint code FAQs</a>
                            </li>
                            <li>
                              <a href="">Identifying manufacturer imprints & logos</a>
                            </li>
                            <li>
                              <a href="">Drugs.com discount card</a>
                            </li>
                          </ul>
                        </p>
                      </div>
                      
                      <!--Further Information-->
                      <div>
                        <h2>Further Information</h2>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum eveniet provident similique ad nisi inventore at minima est, itaque numquam. Obcaecati numquam delectus, corrupti aliquid eligendi suscipit? Ea, hic necessitatibus!
                          <br><br>
                          <a href="">Medical Disclaimer</a>
                        </p>
                      </div>

                  </div>
            </div>
                                      
            <!--Grid Kanan-->
            <div class="col-3 mt-5 pl-4">
                <img src="img/logo/Situs.png" alt="">
            
                <div class="border mt-1" style="border-radius: 11px; background-color:rgb(228, 228, 228);">
                    <div class="isi">
                        <h5>Subscribe To Our Newsletter</h5>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                        FDA Safety Alerts
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Daily MedNews
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Monthly Letters
                        </label>
                    </div>
                    <div class="form-check pb-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            I accept the Terms and Privacy Policy
                        </label>
                    </div>
                    <form>
                        <div class="form-row align-items-center ml-2">
                          <div class="col pl-2">
                            <label class="sr-only" for="inlineFormInput">Email</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Enter Email">
                          </div>
                          <div class="col ">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                          </div>
                        </div>
                      </form>
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
</body>
</html>