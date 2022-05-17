<?php
session_start();

//cek cookie
//if( isset($_COOKIE['login']) ) {
//    if( $_COOKIE['login'] == 'true' ) {
//        $_SESSION['login'] = true;
//    }
  //  }

//    if( isset($_SESSION["login"] ) ) {
 //   header("location: index.php");
 //   exit;
//    }



require 'functions.php';

    if( isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        //cek username
        if( mysqli_num_rows($result) === 1 ) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                $data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
                $hasil = mysqli_fetch_assoc($data);
                $cekuser = $hasil['level'];
                $email = $hasil['email'];
                $user_id = $hasil['user_id'];

                if($cekuser == "User") {
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $_SESSION['email'] = $email;
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['level'] = "User";
                    header("location:index.php");
                    exit;
                } elseif ($cekuser == "Admin") {
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $_SESSION['email'] = $email;
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['level'] = "Admin";
                    header("location:../admin/index.php");
                    exit;
                }

                // set session
                //$_SESSION["login"] = true;

                // cek remember me
              //  if( isset($_POST['remember']) ) {
                    // buat cookie
               ///     setcookie('login', 'true', time() + 60 )
             //   }

                header("location: index.php");
                exit;

            }

        }

        $error = true;
    }


?>
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

    <title>Login - Drugs.Com</title>
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

    
    <form action="" method="post">
    <div class="container mt-3 mb-5 pb-3">
        <div class="row row-cols-2">
            <div class="col-8">
                <div class="container ">
                    <h2 class="text-left ml-3">Account Sign In</h2>
                    <p class="ml-3 ">
                        New to Drugs.com?  <a href="register.php">Create an account</a>
                    </p>
                    <form action="" method="post" class=" border pt-3">
                        <div class="form-group col-6">
                            <label  for="username">Username</label>
                            <input type="text"  name="username" id="username" class="form-control" placeholder="Insert Your Username" >
                        </div>
                        <div class="form-group col-6">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Insert Your Password " autocomplete="off" required>
                        </div>
                       <!-- <div class="form-group  pl-3">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember Me</label>
                        </div> -->
                        <?php if( isset($error) ) : ?>
                          <p style="color: red; font-style: italic; margin-left: 20px;"> Username or password was incorrect.</p>
                        <?php endif; ?>
                        

                        <button type="submit" name="login" class="btn btn-primary ml-3 mt-2">Sign In</button> 
                    </form>
                </div>
            </div>
        </div> 
    </div>
    </form>

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