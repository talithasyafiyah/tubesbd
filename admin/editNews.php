<?php
session_start();
   if(empty($_SESSION['level'])) {
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
    <title><?php echo 'Edit '.$page; ?></title>

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
                            <h3>Edit <?php echo $page; ?></h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="news.php"><?php echo $page; ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit <?php echo $page; ?></li>
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
                                        $news_id = $_POST['news_id'];
                                        $query = "SELECT * FROM news WHERE news_id='$news_id'";
                                        $hasil = mysqli_query($koneksi, $query);
                                        foreach ($hasil as $data){
                                        ?>

                                        <?php
                                            if(isset($_POST['btnUbah'])) {
                                                $no = $_POST['news_id'];
                                                $title = $_POST['title'];
                                                $content = $_POST['content'];
                                                $author = $_POST['author'];
                                                $time = $_POST['created_at'];
                                                
                                                if ($koneksi) {
                                                    $sql = "UPDATE news SET title='$title', content='$content', author='$author', date_approval='$time' WHERE news_id=$no";
                                                    $row = mysqli_query($koneksi,$sql);
                                                    echo "<br><p class='alert alert-primary text-center'><b>Data has been updated.</p>";
                                                } else {
                                                    echo "<p class='alert alert-danger text-center'><b>Terjadi kesalahan:$error</b></p>";
                                                }
                                            }
                                        ?>
                                        <form method="POST" class="form form-horizontal" novalidate="">
                                            <input hidden type="number" name="news_id" value="<?php echo $data['news_id']; ?>">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Title</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?php echo $data['title']; ?>" type="text" id="title" class="form-control"
                                                            name="title">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Content</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?php echo $data['content']; ?>" type="text" id="content" class="form-control"
                                                            name="content">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Author</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?php echo $data['author']; ?>" type="text" id="author" class="form-control"
                                                            name="author">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Created at</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?php echo $data['created_at']; ?>" type="text" id="created_at" class="form-control"
                                                            name="created_at">
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" name="btnUbah"
                                                            class="btn btn-primary me-1 mb-1">Update</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1"><a href="news.php">Back</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php } ?>
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