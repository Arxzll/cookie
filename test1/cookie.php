<?php
$nama=" Ari Rizal Firdaus";
$username= "Azall";
$tgl_lhr="08-02-2006";



setcookie("nama", $nama,time()+3600);
setcookie("username",$username,time()+3600);
setcookie("tanggal_lahir",$tgl_lhr,time()+3600);

echo "Nama :".$_COOKIE['nama'];
echo "<br>";
echo "Username :".$_COOKIE['username'];
echo "<br>";
echo "Tanggal_Lahir :".$_COOKIE['tanggal_lahir'];
?>
<a href="hapus_cookie.php">log out</a>