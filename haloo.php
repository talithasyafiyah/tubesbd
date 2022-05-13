<?php 
include 'koneksi.php';
$id = $_POST['treatment_id'];
$query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id= $id");
$query2= mysqli_fetch_array($query); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $query2["treatment_name"]; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <style>
       a {
            text-decoration: none;

        }
    </style>
</head>
<body>

    <?php 
        include 'koneksi.php';
        $hasil = mysqli_query($koneksi, "SELECT * FROM drugs INNER JOIN treatment on drugs.drug_id=treatment.drug_id WHERE treatment_id =$id " );
        $hasil2 = mysqli_fetch_array($hasil);

     ?>

    <table style="width: 100%;">
        <tr >
            <td style="width: 60%;">
            <h1><b>Medication For <?php echo $query2["treatment_name"]; ?></b></h1> 
            <p><?php echo $query2["medication"]; ?></p>
            <br>
                Drug Used for <?php echo $query2["treatment_name"]; ?> : <br>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <?php echo $hasil2["drug_name"]; ?>
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" > 
                      <a href="#"><?php echo $hasil2["drug_name"] ?></a> <br>
                      Generic Name : <?php echo $hasil2["generic_name"]; ?> <br>  Class : <?php echo $hasil2["drug_class"]; ?><br></div>
                  </div>
                </div>


            
            </td>
            <td ></td>
        </tr>
    </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>