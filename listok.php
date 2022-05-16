<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3/dist/css/bootstrap.css">
    <title>List Condition A-Z</title>
    <style>
        .iykh {
            padding: 0;
            border: none;
            background: none;

        }

        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>
    <h2><b>List conditions</b></h2>
    <?php 
    include 'admin/includes/koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM treatment WHERE treatment_id < 10");
    foreach($query as $row){ ?>



    <ul class="list-group list-group-flush">

        <li class="list-group-item">
            <form action="homepage/treatmentDetails.php" method="POST">

                <input hidden type="text" name="treatment_id" value=<?php echo $row["treatment_id"]; ?>>
                <button type="submit" name="nt" class="iykh">  
                    <?php echo $row["treatment_name"]; ?> 
                </button>
            </form>
        </li>

    </ul>



    <?php } ?>


    <script src="bootstrap-5.1.3/dist/js/bootstrap.js"></script>
    <script src="bootstrap-5.1.3/jquery-3.6.0.min.js"></script>
</body>

</html>