<?php
session_start();
include"koneksi.php";

$id = $_POST['id'];
$pass = md5($_POST['pass']);

if($_POST['masuk']){
    $cek = mysql_query("SELECT * FROM user WHERE userName='$id' AND password='$pass'");
    if(mysql_num_rows($cek)==1){
        $c = mysql_fetch_array($cek);
        $_SESSION['userName'] = $c['userName'];
		$_SESSION['password'] = $c['password'];
		$_SESSION['level'] = $c['level'];
		$_SESSION['namaUser'] = $c['namaUser'];
        header("location:index.php?act=admin.buku");
    }else{ ?>
         <script language="JavaScript">alert('Username/Password yang anda masukan tidak valid ! silahkan coba kembali.');
	 window.history.back()</script><?php
    }
}
?>
