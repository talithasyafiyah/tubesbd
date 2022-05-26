<?php
// KONEKSI KE FUNCTIONS
require 'functions.php';

$detail_id = $_GET["detail_id"];

if( hapus($detail_id) > 0 ) {
    echo "
            <script>
                document.location.href = 'medlistdetails.php'
            </script>
       ";
} else {
    echo "
            <script>
                document.location.href = 'medlistdetails.php'
            </script>
       ";
}

?>