<?php
session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];


    $koneksi = new PDO('mysql:host=localhost;dbname=11pplg','root', '');

    $query = $koneksi->query("select * from siswa where username='$username' and password='$password'");

    $data = $query->fetch();

    if($data){ // jika data ada
//        $_SESSION['sessid'] = hash('sha256', $data['username']);
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        if(isset($_POST['remember_me'])){
          setcookie('id', $data['id'], time() + 3600);
        }

        $nama=" Ari Rizal Firdaus";
        $username= "Azall";
        $tgl_lhr="08-02-2006";
        
        
        
        setcookie("nama", $nama,time()+3600);
        setcookie("username",$username,time()+3600);
        setcookie("tanggal_lahir",$tgl_lhr,time()+3600);
        
        header('location: cookie.php');

    }else{
        echo "username atau password tidak ditemukan";
    }
