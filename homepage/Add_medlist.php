<?php
session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6357c29a35.js" crossorigin="anonymous"></script>
    <style>
        td, td {
            padding: 20px;
            border: 1px solid #dddddd;
        
            
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        i{
            color: rgb(45, 160, 160);
        }

    </style>
    
    <title>Add Medlist - Drugs.com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <?php
    include 'layout/header1.php';
    ?>
    <div class="container">
        <table style="width: 90%; height: auto; border: 1px solid gray;  border-collapse:collapse; margin-top:80px" align="center" >
            <tr>
                <td style="width: 30%;"><a href="medlistdetails.php" style="color: blue;">
                <?php
                include '../admin/includes/koneksi.php';
                $user_id = $_SESSION['user_id'];
                $query = mysqli_query($koneksi, "SELECT medlist.medlist_id FROM medlist WHERE medlist.user_id = '$user_id'");
                $query2= mysqli_fetch_array($query); 
                ?>
                
                <form method="POST" action="medlistdetails.php">
                    <input hidden type="text" name="medlist_id" value=<?php echo $query2["medlist_id"]; ?>>
                    <button type='submit' name='submit' class='btn text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                        <i class="fa-solid fa-chevron-left"></i> Medlist
                    </button>
                </form>
                
                 </a> </td>
                <td  style="text-align: right;"  ></td>
            </tr>
            <tr>
                <td style="width: 10%;"><a href="../profile_info/profile.html"><i class="fa-solid fa-user"></i> Profil</a></td>
                <td style="border: none; " rowspan="20">
                    <ul>
                    <h4>Add your Medlist...</h4>  
                    <span>Add Medlist to your profile to start building a medication record. Gain instant access to interactions, warnings, and alerts.</span> <br> <br>
                    </ul>

                    <form action="" class=" " method="post">
                        <ul>
                            <div class="form-group col-8">
                                <label style="font-size:17px ;" class="mb-1 " for="drugs">Add Drug</label>
                                <select name="drug_id" class="form-select" id="basicSelect">
                                    <?php
                                        include '../admin/includes/koneksi.php';
                                        $hasil = mysqli_query($koneksi, "SELECT * FROM drugs");
                                        foreach($hasil as $row) {
                                    ?>
                                    <option value="<?=$row['drug_id']?>"><?=$row['drug_name'];?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-8">
                                <label style="font-size:17px ;" class="mb-1 " for="condition">Add Condition</label>
                                <input type="text" name="condition" id="condition" class="form-control mb-3" placeholder="Insert Your condition " required autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label style="font-size:17px ;" class="mb-1 " for="allergy">Add Allergy</label>
                                <input type="text" name="allergy" id="allergy" class="form-control mb-3" placeholder="Insert Your allergy " required autocomplete="off">
                            </div>
                            <?php
                            include '../admin/includes/koneksi.php';
                            $user_id = $_SESSION['user_id'];
                            $query = mysqli_query($koneksi, "SELECT medlist.medlist_id FROM medlist WHERE medlist.user_id = '$user_id'");
                            $query2= mysqli_fetch_array($query); 
                            ?>
                            
                            <form method="POST">
                                <input hidden type="text" name="btnAdd" value=<?php echo $query2["medlist_id"]; ?>>
                                <button type='submit' name='submit' class='btn btn-lg text-start' style="background-color: rgb(59, 83, 161);  color: white;">  
                                    Add Medlist
                                </button>
                            </form>
                            <br>
                            <?php
                            require_once '../admin/includes/koneksi.php';
                                    
                            if(isset($_POST['btnAdd'])){
                                $user_id = $_SESSION['user_id'];
                                $query = mysqli_query($koneksi, "SELECT medlist.medlist_id FROM medlist WHERE medlist.user_id = '$user_id'");
                                $query2= mysqli_fetch_array($query);

                                $condition = $_POST['condition'];
                                $allergy = $_POST['allergy'];
                                $medlist_id = $query2['medlist_id'];
                                $drug_id = $_POST['drug_id'];

                                $sql = "INSERT INTO medlist_details VALUES ('', '$condition','$allergy','$medlist_id','$drug_id')";
                                           
                                if($koneksi->query($sql)===TRUE){
                                    echo "<br><p class='alert alert-success text-center'><b>Data has been successfully added.</b></p>";
                                } else {
                                    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                                }             
                            }
                            ?>
                        </ul>
                    </form>
                    
                    
                </td>
        
                
            </tr> 
            <tr>
                <td>
                    <a href="../Drugs/medlistdetails.php"><i class="fa-solid fa-clipboard-list"></i> Medlist</a>
                </td>
            </tr>

            
        
            <tr>
                <td style="width: 30%;"><a href="../Reports/report.html"><i class="fa-solid fa-print"></i> Reports</a></td>
            </tr>
            <tr>
                <td style="width: 30%;"><a href="../Reports/report.html"><i class="fa-solid fa-clipboard"></i> Notes</a></td>
            </tr>
            
        
            </table>
    </div>
    
    <?php
    include 'layout/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>