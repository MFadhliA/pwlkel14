<?php 
include"koneksi.php";
$data=mysql_fetch_array(mysql_query("select*from siswa where kdSiswa='$_GET[kdSiswa]'"));

$qkelas = mysql_query("select * from kelas where id_kelas='".$data['id_kelas']."'");  
$kelas = mysql_fetch_array($qkelas);

$qangkatan = mysql_query("select * from angkatan where no='".$data['angkatan']."'");  
$angkatan = mysql_fetch_array($qangkatan);
?>
<fieldset><legend><h2>Detail Siswa : <?php echo"$data[2]";?></h2></legend>
<table width="538" height="220" border="0">
  <tr>
   
    <td width="117">NIS</td>
    <td width="8">:</td>
    <td width="258"><?php echo"$data[1]"; ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo"$data[2]"; ?></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?php echo"$kelas[1]"; ?></td>
  </tr>
  <tr>
    <td>Angkatan</td>
    <td>:</td>
    <td><?php echo"$angkatan[1]"; ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><?php if("$data[5]"=="P"){
echo  "Perempuan";

}else {echo"Laki-Laki";} ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo"$data[6]"; ?></td>
  </tr>
  <tr>
    <td>No. HP</td>
    <td>:</td>
    <td><?php echo"$data[7]"; ?></td>
  </tr>
   <tr>
    <td>Email</td>
    <td>:</td>
    <td><?php echo"$data[8]"; ?></td>
  </tr>

 
</table>
</fieldset>