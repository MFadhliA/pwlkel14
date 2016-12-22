<?php include "koneksi.php"; 
$nis = $_REQUEST['nis'];
$kdBuku = $_REQUEST['kdBuku'];
$tgl_pjm = $_REQUEST['tgl'];
$simpan = mysql_query("insert into pinjam (nis, kdBuku, tglPinjam) value ('$nis','$kdBuku','$tgl_pjm')");

if ($simpan)
	{
		header('location:index.php?act=peminjaman');
	}
	else {?>
<script language="JavaScript">alert('Maaf satu orang tidak boleh miminjam lebih dari satu buku yang sama');
	 window.history.back()</script>	
	<?php
		
		}

?>