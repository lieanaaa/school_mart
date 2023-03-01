<?php
$nama=$_POST['nama'];
$pass=$_POST['pass'];
if ($nama=='schoolmart' && $pass=='schoolmart'
   ) {
    header("Location:landing.php");
} else {
    echo "LOGIN ANDA GAGAL!!";
    header('location: login.php');
    
}
?>