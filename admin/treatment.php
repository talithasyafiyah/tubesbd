<?php
session_start();
   if(empty($_SESSION['level'] == "Admin")) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
$page = "Treatment";
require_once 'includes/koneksi.php';

/* $username = $_SESSION['username']; */
$query = mysqli_query($koneksi, "SELECT * FROM treatment where treatment_id = 'treatment_id'");
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
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8e7d76cb66.js" crossorigin="anonymous"></script>
    
</head>

<body>
<?php
require_once 'layout/navbar.php';
?>

            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Treatment</h3> <a type="button" class="btn btn-outline-primary btn-sm mb-3"  href="insertTreatment.php"><i class="fa fa-plus-circle orange_color"></i> Add <?php echo $page; ?> </a>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Treatment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Treatment</th>
                                        <th>Medication</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM treatment");
                                    $no = 1;
                                    foreach ($query as $row) {
                                        echo"<tr>
                                                <td>$no</td>
                                                <td>".$row['treatment_name']."</td>
                                                <td>".$row['medication']."</td>
                                                <td>
                                                    <form method='POST' action='editTreatment.php'>
                                                        <input hidden type='text' name='treatment_id' value=".$row['treatment_id'].">
                                                        <button type='submit' name='btnUpdate' class='btn btn-success btn-sm'>
                                                            <i class='fa fa-edit'></i>
                                                        </button>
                                                    </form>
                                                </td>

                                                <td>
                                                    <form onsubmit=\"return confirm ('Are you sure want to delete this data?');\"method='POST';>
                                                        <input hidden name='treatment_id' type='text' value=".$row['treatment_id'].">
                                                        <button type='submit' name='btnHapus' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>
                                                    </form>
                                                </td>
                                            </tr>";
                                    $no++;
                                    }
                                    ?>
                                    <?php
                                    if (isset($_POST['btnHapus'])){      
                                        $id = $_POST['treatment_id'];
                                            
                                        if ($koneksi){
                                            $sql = "DELETE FROM treatment WHERE treatment_id=$id";
                                            mysqli_query($koneksi, $sql);
                                            echo "<p class='alert alert-success text-center'><b>Data has been successfully deleted.</b></p>";
                                        
                                        } else {
                                            echo "<p class='alert alert-danger text-center'><b>Deletion terminated, something went wrong.";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
            </div>
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