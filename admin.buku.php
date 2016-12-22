<?php if ($_SESSION['level']== "2"){?>
<div class="products">  
<h2>Admin - Daftar Buku</h2>
<?php
include"koneksi.php";
if (!empty($_REQUEST['act2'])){
if ($_REQUEST['act2']=="del_buku"){
$query_delete=mysql_query("delete from buku where kdBuku='$_REQUEST[kdBuku]'");
echo "<script language>alert('Data berhasil dihapus - delete from buku where kdBuku='$_REQUEST[act2]'');</script>";}}
$totaldata = 8;
if(isset($_GET['page'])){ $noPage=$_GET['page']; } else { $noPage=1; }
$offset=($noPage-1)*$totaldata;
$query="SELECT * FROM buku order by kdBuku desc LIMIT $offset, $totaldata";
$result=mysql_query($query) or die('Error');
$query="SELECT COUNT(*) AS jumData FROM buku";
$hasil=mysql_query($query) ;
$data=mysql_fetch_array($hasil);
$jumData=$data['jumData'];
$jumPage=ceil($jumData/$totaldata);
?>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th width="10" class="rounded-company" ></th>
            <th width="94" class="rounded" >Judul</th>
            <th width="106" class="rounded" >Pengarang</th>
            <th width="33" class="rounded" >Stok</th>
            <th width="30" class="rounded" >Edit</th>
            <th width="45" class="rounded-q4" >Delete</th>
        </tr>
    </thead>
   <?php
  
    while($data = mysql_fetch_array($result)){

$rowset = mysql_query("select * from pengarang where idPengarang='".$data['kdPengarang']."'");  
$pengarang = mysql_fetch_array($rowset); ?>
    <tbody>
    	<tr> 
        	<td><a href="index.php?act=detail&&kdBuku=<?php echo"$data[kdBuku]"; ?>">&bull;</a></td>
            <td><a href="index.php?act=detail&&kdBuku=<?php echo"$data[kdBuku]"; ?>"><?php echo"$data[Judul]"; ?></a></td>
            <td><a href="index.php?act=detail&&kdBuku=<?php echo"$data[kdBuku]"; ?>"><?php echo"$pengarang[1]"; ?></a></td>
            <td><a href="index.php?act=detail&&kdBuku=<?php echo"$data[kdBuku]"; ?>"><?php echo"$data[jmlStok]"; ?></a></td>
            <td><a href="index.php?act=edit.buku&&kdBuku=<?php echo"$data[kdBuku]"; ?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td>
			<?php echo"<a href='index.php?act=admin.buku&act2=del_buku&kdBuku=$data[0]' class=ask onClick='return confirm(\" Apakah anda yakin untuk menghapus data ini?\");'><img src=images/trash.png border=0 /></a>"
			 ?>
			</td>
	    </tr>    
    </tbody>
    <?php } ?>
</table>
<br /><br />
<div class="pagination">
	<?php
	if ($noPage > 1){ echo  "<a href='".$_SERVER['PHP_SELF']."?act=admin.buku&&page=".($noPage-1)."'>Sebelumnya</a>"; }
	else { echo "<span class=disabled>Sebelumnya</span>"; }
	for($page = 1; $page <= $jumPage; $page++)
	{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
         {   
		  if (($page != 1) && ($page != 2)&& ($page != 3)&& ($page != 4))  echo "..."; 
            if (($page != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            
			if ($page == $noPage) echo "<span class=current>$page</span>";
            else echo "<a href='".$_SERVER['PHP_SELF']."?act=admin.buku&&page=".$page."'>".$page."</a>";
            $showPage = $page;          
         }
	}
	if ($noPage < $jumPage){ echo "<a href='".$_SERVER['PHP_SELF']."?act=admin.buku&&page=".($noPage+1)."'>Selanjutnya</a>"; }
	else { echo "<span class=disabled>Selanjutnya</span>"; }
	?>
         </div> 
           <a href="?act=tambah.buku" class="bt_green"><span class="bt_green_lft"></span><strong>Tambah Buku</strong><span class="bt_green_r"></span></a>
          </div>
               <?php
}
else {
?>
<script language="JavaScript">alert('Maaf anda harus login sebagai admin terlebih dahulu');
	 window.history.back()</script><?php
} ?>