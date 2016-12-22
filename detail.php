<?php 
include"koneksi.php";
$data=mysql_fetch_array(mysql_query("select*from buku where kdBuku='$_GET[kdBuku]'"));

$qpengarang = mysql_query("select * from pengarang where idPengarang='".$data['kdPengarang']."'");  
$pengarang = mysql_fetch_array($qpengarang);

$qpenerbit = mysql_query("select * from penerbit where kdPenerbit='".$data['kdPenerbit']."'");  
$penerbit = mysql_fetch_array($qpenerbit);
?>
<h2>Detail Buku : <?php echo"$data[2]";?></h2>
<table width="538" border="0">
  <tr>
    <td rowspan="6"><img src="<?php echo"$data[5]"; ?>" width="103" height="150" /></td>
    <td width="117">Judul</td>
    <td width="8">:</td>
    <td width="258"><?php echo"$data[2]"; ?></td>
  </tr>
  <tr>
    <td>Pengarang</td>
    <td>:</td>
    <td><?php echo"$pengarang[1]"; ?></td>
  </tr>
  <tr>
    <td>Penerbit</td>
    <td>:</td>
    <td><?php echo"$penerbit[1]"; ?></td>
  </tr>
  <tr>
    <td>Tempat</td>
    <td>:</td>
    <td><?php echo"$data[7]"; ?></td>
  </tr>
  <tr>
    <td>Jumlah Stok</td>
    <td>:</td>
    <td><?php echo"$data[6]"; ?></td>
  </tr>
  <tr>
    <td>Jumlah Peminjam</td>
    <td>:</td>
    <td><?php echo"$data[9]"; ?></td>
  </tr>
  <tr>
    <td>Preview :</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><?php echo"$data[8]"; ?></td>
  </tr>
</table>
