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
    <div class="container mt-4 ">
        <div class="row row-cols-2">
            <div class="col-9 ">
              <p style="font-size: 13px;"> <a href="" style="color: grey;"> Drugs A to Z</a>  </p>
                <h1><bold>Acetaminophen</bold></h1>
                <p><b>generic name : </b> acetaminophen (oral) [ a- <i>SEET-a-MIN-oh-fen ]</i>  <br>
                    <b>Brand names : </b> Actamin, Anacin AF, Aurophen, Bromo Seltzer, Children's Tylenol, Mapap, M-Pap,
                     Pharbetol, Silapap Childrens, Tactinal, Tempra Quicklets, Tycolene, Tylenol, Vitapap
                     <br>
                     <b>Dosage forms : </b> oral capsule (325 mg; 500 mg); oral granule, effervescent (650 mg);
                      oral liquid (160 mg/5 mL; 325 mg/10.15 mL; 500 mg/15 mL; 650 mg/20.3 mL); oral powder (500 mg); 
                      oral suspension (160 mg/5 mL; 650 mg/20.3 mL); oral tablet (325 mg; 500 mg); oral tablet, 
                      chewable (160 mg; 80 mg);
                      oral tablet, disintegrating (160 mg; 325 mg; 80 mg); oral tablet, extended release (650 mg)
                      <br>
                      <b>Drug class : </b> <a href="">Miscellaneous analgesics</a>
                      <br>
                </p>
                <br>

                  <!--what is ...-->

                <h2> <bold>What is acetaminophen?</bold> </h2>
                <div>
                  <p>Acetaminophen is a <a href=""> pain reliever </a> and a fever reducer. </p> 
                  <p>Acetaminophen is used to treat mild to moderate and pain, to treat moderate to severe pain in
                   conjunction with opiates, or to reduce fever. Common conditions treated include headache, muscle 
                   aches, <a href="">arthritis</a> , backache, toothaches, sore throat, colds, flu, and <a href="">fevers</a> .</p> 
                    
                    <p> Acetaminophen is also available in many over-the-counter combination medications with other drugs, 
                    including Actifed, Alka-Seltzer Plus Liquid Gels, Cepacol, Contac, Coridicin, Dayquil, Dimetapp, 
                    Dristan, Excedrin, Feverall, Liquiprin, Midol, Nyquil, Panadol, Robitussin Singlet, Sinutab, Sudafed,
                     Theraflu, Triaminic, Vanquish, Vicks, and Zicam.</p> 
                    
                    <p> Acetaminophen is also found in many prescription combination drugs, including Butalbital, Endocet,
                     Fioricet, Hycotab, Hydrocet, Hydrocodone bitartrate, Lortab, Percocet, Phenaphen, Sedapap, Tapanol,
                      Tylenol with codeine, Tylox, Ultracet, Vicodin, and Zydone.</p> 
                    
                    <p> Acetaminophen is typically used orally, but can be given intravenously.</p> 
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