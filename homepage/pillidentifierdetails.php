<?php 
include '../admin/includes/koneksi.php';
$id = $_POST['identifier_id'];
$query = mysqli_query($koneksi, "SELECT pill_identifier.pill_imprint, pill_identifier.definition, pill_identifier.strength, pill_identifier.color, pill_identifier.shape, pill_identifier.url, drugs.drug_id, drugs.drug_name, drugs.drug_class FROM pill_identifier JOIN drugs ON pill_identifier.drug_id = drugs.drug_id WHERE identifier_id = '$id'");
$query2= mysqli_fetch_array($query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' href='css/ddc-pack-site.min.2af34de6.css'>
    <link rel='stylesheet' href='css/ddc-print.min.07943132.css' media='print'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>
    <title><?=$query2['pill_imprint'];?></title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <style>
        .btn-transparent {
            background-color: #fff;
            color: blue;
        }

        .btn-light-smooth {
            border: 1px solid #333;
            transition: all .3s;
        }

        .btn-light-smooth:hover {
            background-color: #ddd;
        }
    </style>
    <style>
        * {
          box-sizing: border-box;
        }
        
        .zoom {
          transition: transform .2s;
          margin: 0 auto;
        }
        
        .zoom:hover {
          -ms-transform: scale(1.2); /* IE 9 */
          -webkit-transform: scale(1.2); /* Safari 3-8 */
          transform: scale(1.2); 
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

    <div class="container-xl">
        <div class="row">
            <div class="col-8">
                <main id="container" class="container">
                    <h1><?=$query2['pill_imprint'];?> (<?=$query2['drug_name'];?> <?=$query2['strength'];?>)</h1>
                    <p><?=$query2['definition'];?></p>
            </div>
            <div class="row mt-0">
              <h2 class="mb-4">Images for <?=$query2['pill_imprint'];?></h2>
              <div class="col-3">
                  <div class="zoom "><img src="<?=$query2['url'];?>" alt=""></div>
              </div>
              <div class="col-9">
                  <form action="drugsdetail1.php" method="POST">
                      <input hidden type="text" name="drug_id" value=<?php echo $query2["drug_id"]; ?>>
                      <button type='submit' name='nt' class='btn btn-success text-start' style="background-color: rgb(40, 93, 185, 0); color: blue; border: none;">  
                          <h5 class="ddc-mgt-0"><b><?php echo $query2["drug_name"]; ?></b></h5>
                      </button>
                  </form>
                
                <dl class="pid-list">
			
			<dt>Imprint: </dt>
			<dd><?=$query2['pill_imprint'];?></dd>

            <dt>Strength: </dt>
			<dd><?=$query2['strength'];?></dd>

			<dt>Color: </dt>
			<dd><?=$query2['color'];?></dd>
			
			<dt>Shape: </dt>
			<dd><?=$query2['shape'];?></dd>
		
			<dt>Drug Class: </dt>
			<dd class="pid-list-item-wide"> <?=$query2['drug_class'];?> </dd>
		
			</dl>
            <div class="ddc-mgt-2 ddc-mgb-4 ddc-btn-group noprint">
                <form action="drugsdetail1.php" method="POST">
                      <input hidden type="text" name="drug_id" value=<?php echo $query2["drug_id"]; ?>>
                      <button type='submit' name='nt' class= 'btn btn-primary'>  
                          Drug Uses
                      </button>
                </form>
                <a><button type="button" class="btn btn-light">Print</button></a>
            </div>
              </div>
</main>
</div>
</div>
</div>
<?php
    include 'layout/footer.php';
?>
</body>
</html>