<?php
/* session_start();
   if(empty($_SESSION['level'])) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../pages/login.php'</script>";
   } */
$page = "Drugs";
require_once './includes/koneksi.php';

/* $username = $_SESSION['username']; */
$query = mysqli_query($koneksi, "SELECT * FROM drugs where drug_id = 'drug_id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page; ?></title>

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

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Form Layout</h3>
                <p class="text-subtitle text-muted">Multiple form layout you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>First Name</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control"
                                                name="fname" placeholder="First Name">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email-id" class="form-control"
                                                name="email-id" placeholder="Email">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mobile</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="contact-info" class="form-control"
                                                name="contact" placeholder="Mobile">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control"
                                                name="password" placeholder="Password">
                                        </div>
                                        <div class="col-12 col-md-8 offset-md-4 form-group">
                                            <div class='form-check'>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox1"
                                                        class='form-check-input' checked>
                                                    <label for="checkbox1">Remember Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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