<?php
$namafolder="buku/";
include"koneksi.php";
if (!empty($_FILES["Gambar"]["tmp_name"]))
{
	$jmlStok_gambar=$_FILES['Gambar']['type'];
	$Judul=$_POST['Judul'];
	$jmlStok=$_POST['jmlStok'];
	$kdKategori=$_POST['kdKategori'];
	$kdPengarang=$_POST['kdPengarang'];
	$kdPenerbit=$_POST['kdPenerbit'];
	$Tempat=$_POST['Tempat'];
	$preview=$_POST['preview'];
	if($jmlStok_gambar=="image/jpeg" || $jmlStok_gambar=="image/jpg" || $jmlStok_gambar=="image/gif" || $jmlStok_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['Gambar']['name']);		
		if (move_uploaded_file($_FILES['Gambar']['tmp_name'], $gambar)) {
			$sql="insert into buku(Judul,jmlStok,kdKategori,kdPengarang,kdPenerbit,Tempat,preview,Gambar) values ('".htmlentities($_POST['Judul'],ENT_QUOTES)."','$jmlStok','$kdKategori','$kdPengarang','$kdPenerbit','$Tempat','$preview','$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			?>
		<script language="JavaScript">alert('Anda Berhasil Menambahkan Data');
	 window.location='index.php?act=admin.buku';</script>
  <?php	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else { ?>
		<script language="JavaScript">alert('Jemis gambar yang anda kirim salah. Harus .jpg .gif .png');
	 window.history.back()</script>
  <?php }
} else { ?>
		<script language="JavaScript">alert('Anda Belum Memilih Gambar');
	 window.history.back()</script>
  <?php
}
?>