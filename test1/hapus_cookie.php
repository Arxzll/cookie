<?php

setcookie("nama", $nama,time()-1);
setcookie("username",$username,time()-1);
setcookie("tanggal_lahir",$tgl_lhr,time()-1);

header('location : logout.php');