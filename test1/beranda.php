<?php
session_start();
//kalau tidak ada  session username
if(!isset($_SESSION['username'])){
    //arahin ke halaman login
    header("location:login.php");
}


echo "Nama :".$_COOKIE['nama'];
echo "<br>";
echo "Username :".$_COOKIE['username'];
echo "<br>";
echo "Tanggal_Lahir :".$_COOKIE['tanggal_lahir'];
?>
<a href="logout.php">Logout</a>
<form action="hapus_cookie.php" method="post"><button type="submit" >Hapus</button>
</form>
