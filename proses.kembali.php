<?php include "koneksi.php"; 
$noKembali = $_REQUEST['noKembali'];
$nis = $_REQUEST['nis'];
$kdBuku = $_REQUEST['kdBuku'];
$tglKembali = $_REQUEST['tglKembali'];
$noPinjam = $_REQUEST['noPinjam'];

$simpan = mysql_query("INSERT INTO pengembalian (noKembali, nis, kdBuku, tglKembali) values 
('$noKembali','$nis','$kdBuku','$tglKembali')");

if ($simpan)
	{
		$kurang = mysql_query("delete from pinjam where noPinjam='$noPinjam'") ;

		header('location:index.php?open=admin.kembali');
	}

?>

