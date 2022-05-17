<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['level']);

session_destroy();
echo "<script>alert('You have successfully logged out.');document.location='index.php'</script>"

?>