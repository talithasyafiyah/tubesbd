<?php
session_start();
   if(empty($_SESSION['level'] == "Admin")) {
      echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='./../homepage/login.php'</script>";
   }
require_once 'includes/koneksi.php';
$page = "News";
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
                            <h3>Add <?php echo $page; ?></h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="news.php"><?php echo $page; ?></a></li>
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
                                                        <label>Title</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="title" class="form-control"
                                                            name="title">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Content</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="content" class="form-control"
                                                            name="content">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Author</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="author" class="form-control"
                                                            name="author">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Picture</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="picture" class="form-control"
                                                            name="picture">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Created at</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="date" id="created_at" class="form-control"
                                                            name="created_at">
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" name="btnAdd"
                                                            class="btn btn-primary me-1 mb-1">Save</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1"><a href="news.php">Back</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            require_once 'includes/koneksi.php';
                                                    
                                            if(isset($_POST['btnAdd'])){
                                                $title = $_POST['title'];
                                                $content = $_POST['content'];
                                                $author = $_POST['author'];
                                                $pict = $_POST['picture'];
                                                $time = $_POST['created_at'];
                                                $admin = $_SESSION['user_id'];
                                                $sql = "INSERT INTO news (title, content, author, picture, created_at, user_id) VALUES ('$title','$content','$author', '$pict', '$time', '$admin')";
																			
			                                    if($koneksi->query($sql)===TRUE){
                                                    echo "<script>setTimeout(\"location.href = 'news.php';\",1500);</script>";
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