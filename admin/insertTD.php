<?php
session_start();
   if(empty($_SESSION['level'] == "Admin")) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
require_once 'includes/koneksi.php';
$page = "Treatment";
/* $username = $_SESSION['username']; */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Add '.$page; ?></title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">

    <link rel="stylesheet" href="./assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="./assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/all.min.css">

    <link rel="stylesheet" href="./assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8e7d76cb66.js" crossorigin="anonymous"></script>
    
</head>

<body>
<?php
require_once './layout/navbar.php';
?>
        <div id="main-content">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Add Drugs for Treatment</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="treatment.php"><?php echo $page; ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add <?php echo $page; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <?php
                                        require_once 'includes/koneksi.php';
                                        $treatment_id = $_POST['treatment_id'];
                                        $query = "SELECT * FROM treatment WHERE treatment_id='$treatment_id'";
                                        $hasil = mysqli_query($koneksi, $query);
                                        foreach ($hasil as $data){
                                        ?>

                                        
                                        <form method="POST" class="form form-horizontal" novalidate="">
                                            <input hidden type="number" name="treatment_id" value="<?php echo $data['treatment_id']; ?>">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Drug Used</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <form action="POST">
                                                        <select name="drug_id" class="form-select" id="basicSelect">
                                                            <?php
                                                                include '../admin/includes/koneksi.php';
                                                                $hasil = mysqli_query($koneksi, "SELECT * FROM drugs");
                                                                foreach($hasil as $row) {
                                                            ?>
                                                            <option value="<?=$row['drug_id']?>"><?=$row['drug_name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                        </form>
                                                    </div>
        
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" name="btnAdd"
                                                            class="btn btn-primary me-1 mb-1">Save</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1"><a href="treatment.php">Back</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php } ?>
                                        <?php
                                            if(isset($_POST['btnAdd'])) {
                                                $treatment_id = $_POST['treatment_id'];
                                                $drug_id = $_POST['drug_id'];
                                                $sql = "INSERT INTO manydrugs (drug_id, treatment_id) VALUES ('$drug_id','$treatment_id')";			
			                                    if($koneksi->query($sql)===TRUE){
                                                    echo "<script>setTimeout(\"location.href = 'treatment.php';\",1500);</script>";
                                                    echo "<p class='alert alert-success text-center'><b>Data has been successfully added.</b></p>";
			                                    } else {
				                                    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
			                                    }    
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>
        </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>