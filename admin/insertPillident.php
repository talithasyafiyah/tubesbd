<?php
session_start();
   if(empty($_SESSION['level'] == "Admin")) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
require_once 'includes/koneksi.php';
$page = "Pill Identifier";
/* $username = $_SESSION['username']; */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Add '.$page; ?></title>

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
                            <h3>Add <?php echo $page; ?></h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="pillident.php"><?php echo $page; ?></a></li>
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
                                        <form method="POST" class="form form-horizontal" novalidate="">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Pill Imprint</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="pill_imprint" class="form-control"
                                                            name="pill_imprint">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Color</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="color" class="form-control"
                                                            name="color">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Shape</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="shape" class="form-control"
                                                            name="shape">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Definition</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="definition" class="form-control"
                                                            name="definition">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Picture</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="url" class="form-control"
                                                            name="url">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Drug ID</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="drug_id" class="form-control"
                                                            name="drug_id">
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" name="btnAdd"
                                                            class="btn btn-primary me-1 mb-1">Save</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1"><a href="treatment.php">Back</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            require_once'../admin/includes/koneksi.php';
                                                    
                                            if(isset($_POST['btnAdd'])){
                                                $imprint = $_POST['pill_imprint'];
                                                $color = $_POST['color'];
                                                $shape = $_POST['shape'];
                                                $definition = $_POST['definition'];
                                                $pict = $_POST['url'];
                                                $drug = $_POST['drug_id'];
                                                $sql = "INSERT INTO pill_identifier (pill_imprint, definition, color, shape, url, drug_id) VALUES ('$imprint','$definition','$color', '$shape', '$pict', '$drug')";
																			
			                                    if($koneksi->query($sql)===TRUE){
                                                    echo "<script>setTimeout(\"location.href = 'pillident.php';\",1500);</script>";
                                                    echo "<p class='alert alert-success text-center'><b>Data has been successfully added.</b></p>";
			                                    } else {
				                                    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
			                                    }             
                                            }
                                            ?>
                                        </form>
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