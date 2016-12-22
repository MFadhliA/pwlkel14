<?php 
include"koneksi.php";
$buku=mysql_fetch_array(mysql_query("select*from buku where nis='$_GET[nis]'"));
?>
<fieldset><legend><span class="style1">Profile buku Ini :</span></legend>
<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><span class="style1">NIS/NIM :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['0'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">Nama :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['1'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">Sekolah :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['2'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">Jurusan :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['3'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">No.HP/Telp. :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['4'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">E-mail :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['5'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">Alamat :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['6'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">Mulai :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['7'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">Sampai :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['8'] ?></span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">Jenis Kelamin :&nbsp;</span></td>
    <td><span class="style1"><?php echo $buku['9'] ?></span></td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style1">Keterangan :&nbsp;</span></td>
    <td><span class="style2"><?php echo $buku['10'] ?></span></td>
  </tr>
</table>
</fieldset>

