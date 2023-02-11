<?php
session_start();
$_SESSION['username'] = "pembeli";
header("location:data_siswa.php");
?>