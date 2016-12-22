<?php if ($_SESSION['level']== "2"){
				   ?>
<div class="products">  
<h2>Admin - Daftar Siswa</h2>
<?php
include"koneksi.php";

if (!empty($_REQUEST['act2'])){
if ($_REQUEST['act2']=="del_siswa"){
$query_delete=mysql_query("delete from siswa where kdSiswa='$_REQUEST[kdSiswa]'");
echo "<script language>alert('Data berhasil dihapus - delete from siswa where kdSiswa='$_REQUEST[act2]'');</script>";}}

$totaldata = 8;
if(isset($_GET['page'])){ $noPage=$_GET['page']; } else { $noPage=1; }

$offset=($noPage-1)*$totaldata;
$query="SELECT * FROM siswa order by nama desc LIMIT $offset, $totaldata";
$result=mysql_query($query) or die('Error');
$query="SELECT COUNT(*) AS jumData FROM siswa";
$hasil=mysql_query($query) ;
$data=mysql_fetch_array($hasil);
$jumData=$data['jumData'];
$jumPage=ceil($jumData/$totaldata);

?>

<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th width="43" class="rounded-company" ></th>
            <th width="149" class="rounded" >Nama</th>
            <th width="98" class="rounded" >Jenis Kelamin</th>
            <th width="119" class="rounded" >Kelas</th>
            <th width="54" class="rounded" >Edit</th>
            <th width="45" class="rounded-q4" >Delete</th>
        </tr>
    </thead>
   <?php
  
    while($data = mysql_fetch_array($result)){

$rowset = mysql_query("select * from kelas where id_kelas='".$data['id_kelas']."'");  
$kelas = mysql_fetch_array($rowset); ?>
    <tbody>
    	<tr> 
        	<td><a href="index.php?act=detail.siswa&&kdSiswa=<?php echo"$data[kdSiswa]"; ?>">&bull;</a></td>
            <td><a href="index.php?act=detail.siswa&&kdSiswa=<?php echo"$data[kdSiswa]"; ?>"><?php echo"$data[nama]"; ?></a></td>
            <td><a href="index.php?act=detail.siswa&&kdSiswa=<?php echo"$data[kdSiswa]"; ?>"><?php if("$data[jenis_kelamin]"=="P"){
echo  "Perempuan";

}else {echo"Laki-Laki";} ?></a></td>
            <td><a href="index.php?act=detail.siswa&&kdSiswa=<?php echo"$data[kdSiswa]"; ?>"><?php echo"$kelas[nama_kelas]"; ?></a></td>
            <td><a href="index.php?act=edit.siswa&&kdSiswa=<?php echo"$data[kdSiswa]"; ?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td>			<?php echo"<a href='index.php?act=admin.siswa&act2=del_siswa&kdSiswa=$data[0]' class=ask onClick='return confirm(\" Apakah anda yakin untuk menghapus data ini?s\");'><img src=images/trash.png border=0 /></a>"
			
			 ?></td>
        </tr>    
        
    </tbody>
    <?php } ?>
</table>
<br /><br />
<a href="?act=tambah.siswa" class="bt_green"><span class="bt_green_lft"></span><strong>Tambah Siswa</strong><span class="bt_green_r"></span></a>
<div class="pagination">
<br /><br />
	<?php
	if ($noPage > 1){ echo  "<a href='".$_SERVER['PHP_SELF']."?act=admin.siswa&&page=".($noPage-1)."'>Sebelumnya</a>"; }
	else { echo "<span class=disabled>Sebelumnya</span>"; }
	for($page = 1; $page <= $jumPage; $page++)
	{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
         {   
		  if (($page != 1) && ($page != 2)&& ($page != 3)&& ($page != 4))  echo "..."; 
            if (($page != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            
			if ($page == $noPage) echo "<span class=current>$page</span>";
            else echo "<a href='".$_SERVER['PHP_SELF']."?act=admin.siswa&&page=".$page."'>".$page."</a>";
            $showPage = $page;          
         }
	}
	if ($noPage < $jumPage){ echo "<a href='".$_SERVER['PHP_SELF']."?act=admin.siswa&&page=".($noPage+1)."'>Selanjutnya</a>"; }
	else { echo "<span class=disabled>Selanjutnya</span>"; }
	?>
	</div>  
       </div>
               <?php
}
else {
	
?>
<script language="JavaScript">alert('Maaf anda harus login sebagai admin terlebih dahulu');
	 window.history.back()</script><?php
} ?>