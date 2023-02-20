<?php
session_start();
//koneksi database 11pplg
$koneksi = new PDO('mysql:hpst=Localhost;dbname=11pplg','root','');
//mencari data di table siswa berdasarkan username dan password
$username =$_POST['username'];
$password =$_POST['password'];
$query=$koneksi ->query ("select * from siswa where username='$username' AND password='$password'");
//mengecek,jika ada maka dikasih session dan dialihkan ke halaman beranda
if($query->rowCount() > 0){
    $_SESSION['username']=$_POST['username'];
    header('location:beranda.php');
}else{
    header("location:login.php");
}
//jika tidak ada,dialihkan ke halaman login








//$_SESSION['username']=$_POST['username'];
//$_SESSION['password']= $_POST['password'];

//session_start();
//cara membuat
//$_SESSION['username']= "abdul";
//cara menampilkan
//echo $_SESSION['username'];
?>