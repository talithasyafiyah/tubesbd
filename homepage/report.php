<?php
require 'functions.php';
//$id = $_POST['medlist_id'];
//$mdlist = query("SELECT * FROM medlist_details JOIN drugs ON medlist_details.drug_id = drugs.drug_id WHERE medlist_id = $id");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    
    <title>Reports - Drugs.com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include 'layout/header1.php';
    ?>
    <div class="container">
        <table style="width: 90%; border: 1px solid gray;  border-collapse:collapse; margin-top:80px" align="center" >
            <tr>
                <td style="width: 30%;"><a href="overviewAcc.php" style="color: blue;"> <i class="fa-solid fa-chevron-left"></i> Profiles</a> </td>
                <td  style="text-align: right;"  ><a href="Report.php" style="color: blue;">Report</a></td>
            </tr>
            <tr>
                <td style="width: 10%;;"><a href="medlist/profile_info/profile.php"><i class="fa-solid fa-user"></i> Profil</a></td>
                <td style="border: none;  " rowspan="20"   >
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                    
                        </div>  
                         <!--ISI REPORT-->
                         <h4>Interactions Report</h4>
                            <br>
                            <span>Note: This is not necessarily a complete list of warnings. Always consult
                                 your healthcare provider before starting or stopping any medication.</span>
                                 <br> <br>
                            <h5>Medlist Details</h5>
                        

                            </div>
                        </div>  
                        </div>                          
                          <br><br>
                          <?php
                            include '../admin/includes/koneksi.php';
                            $user_id = $_SESSION['user_id'];
                            $query = mysqli_query($koneksi, "SELECT medlist.medlist_id FROM medlist WHERE medlist.user_id = '$user_id'");
                            $query2= mysqli_fetch_array($query); 
                            ?>
                            
                            <form method="POST" action="cetak.php">
                                <input hidden type="text" name="medlist_id" value=<?php echo $query2["medlist_id"]; ?>>
                                <button type='submit' name='submit' class='btn btn-primary text-start'>  
                                    Print
                                </button>
                            </form>
                        </div>
                    
                    </div>
                </td>
        
                
            </tr> 
            <tr>
                <td>
                    <a href="medlistdetails.php"><i class="fa-solid fa-clipboard-list"></i> Medlist</a>
                </td>
            </tr>

            
        
            <tr>
                <td style="width: 30%;"><a href="report.php"><i class="fa-solid fa-print"></i> Reports</a></td>
            </tr>
            <tr>
                <td style="width: 30%;"><a href="medlist/notes/notes.html"><i class="fa-solid fa-clipboard"></i> Notes</a></td>
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