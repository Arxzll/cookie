<?php

setcookie("nama",'',time()-1000);
setcookie("username",'',time()-1000);
setcookie("tanggal_lahir",'',time()-1000);

header('location:logout.php');