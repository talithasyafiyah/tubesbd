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

    <title>Register - Drugs.Com</title>
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
include 'layout/header.php'
?>
    <!--CONTENT-->

    <!--Grid Kiri-->
    <!--baris 1-->
    <div class="container mt-2 mb-5 ">
        <div class="row row-cols-2">
            <div class="col-8">
                <div class="container ">
                    <h2 class="text-left ml-3">Create Your Account</h2>
                    <p class="ml-3">
                        Your Drugs.com account allows you to setup personal drug lists (with detailed interaction data), rate and review medications, join support groups, ask questions, and subscribe to newsletters.
                            <br> <br>
                        Already have an account? <a href="login.php"> Sign in</a>
                    </p>
                    <form action="">
                        <div class="form-group col-9">
                            <label for="">Email Address</label>
                            <input type="text" name="" class="form-control" placeholder="Insert Your Email ">
                        </div>

                        <div class="form-group col-8">
                            <label for="">Username</label>
                            <input type="text" name="" class="form-control" placeholder="Insert Your Username ">
                        </div>
                        <div class="form-group col-8">
                            <label for="">Password</label>
                            <input type="password" name="" class="form-control" placeholder="Insert Your Password ">
                        </div>
                        <div class="form-group col-8">
                            <span > Age :</span> 
                            <select name="age"  data-live-validate class="ddc-width-one-half mt-1" id="">
                                <option value disabled selected > -- select -- </option>
                                <option value="8"><18</option>
                                <option value="2">18-24</option>
                                <option value="3">25-34</option>
                                <option value="4">35-44</option>
                                <option value="5">45-54</option>
                                <option value="6">55-64</option>
                                <option value="7">>65</option>  
                            </select>
                        </div>
                        <div class="form-group ml-3 mt-3">
                            <label for="">Healthcare Professionals</label>

                            <input type="checkbox" id="healthcarepro" name="healthcarepro" value="healthcarepro"> I am a Healthcare Professional
                        </div>

                        <button type="submit" class="btn btn-primary ml-3 mt-2">Create Account</button>
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