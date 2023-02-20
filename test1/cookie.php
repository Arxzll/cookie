<?php

echo "Nama :".$_COOKIE['nama'];
echo "<br>";
echo "Username :".$_COOKIE['username'];
echo "<br>";
echo "Tanggal_Lahir :".$_COOKIE['tanggal_lahir'];
?>
<a href="hapus_cookie.php">log out</a>
<form action="hapus_cookie.php" method="post"><button type="submit" >Hapus</button>
</form>