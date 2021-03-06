<?php
session_start();
   if(empty($_SESSION['level'] == "Admin")) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
?>

<?php
$page = "Dashboard";
require_once 'includes/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page; ?></title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                    <h3>Statistics</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stats-icon purple">
                                                        <i class="fa-solid fa-users"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Users</h6>
                                                    <?php
                                                    $users = mysqli_query($koneksi,"SELECT * FROM user");
                                                    $users_count = mysqli_num_rows($users);
                                                    ?>
                                                    <h6 class="font-extrabold mb-0"><?=$users_count;?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stats-icon blue">
                                                        <i class="fa-solid fa-pills"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Drugs</h6>
                                                    <?php
                                                    $drugs = mysqli_query($koneksi,"SELECT * FROM drugs");
                                                    $drugs_count = mysqli_num_rows($drugs);
                                                    ?>
                                                    <h6 class="font-extrabold mb-0"><?=$drugs_count;?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stats-icon green">
                                                        <i class="fa-solid fa-suitcase-medical"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Treatments</h6>
                                                    <?php
                                                    $treatments = mysqli_query($koneksi,"SELECT * FROM treatment");
                                                    $treatments_count = mysqli_num_rows($treatments);
                                                    ?>
                                                    <h6 class="font-extrabold mb-0"><?=$treatments_count;?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stats-icon red">
                                                        <i class="fa-solid fa-newspaper"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Drug Approvals</h6>
                                                    <?php
                                                    $approvals = mysqli_query($koneksi,"SELECT * FROM drug_approval");
                                                    $approvals_count = mysqli_num_rows($approvals);
                                                    ?>
                                                    <h6 class="font-extrabold mb-0"><?=$approvals_count;?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Drugs Data</h4>
                                        </div>
                                        <div>
                                            <canvas id="myChart" class="ps-5 pe-5 pb-5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php
    $drugs = mysqli_query($koneksi,"SELECT * FROM drugs");
    $drugs_count = mysqli_num_rows($drugs);

    $pills = mysqli_query($koneksi,"SELECT * FROM pill_identifier");
    $pills_count = mysqli_num_rows($pills);

    $treatments = mysqli_query($koneksi,"SELECT * FROM treatment");
    $treatments_count = mysqli_num_rows($drugs);

    $approvals = mysqli_query($koneksi,"SELECT * FROM drug_approval");
    $approvals_count = mysqli_num_rows($approvals);


    ?>

    <script>
    const labels = [
        'Drugs',
        'Pill Identifier',
        'Treatments',
        'New Drug Approvals',
    ];

    const data = {
        labels: labels,
        datasets: [{
        label: 'Drugs Data',
        data: [<?=$drugs_count;?>, <?=$pills_count;?>, <?=$treatments_count;?>, <?=$approvals_count;?>],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
        ],
        borderWidth: 1
    }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        },
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
    </script>

    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>