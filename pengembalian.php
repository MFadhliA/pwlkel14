<?php if ($_SESSION['level']== "2"){?>
<div class="products">  
<h2>Admin - Data/Riwayat Pengembalian</h2>
<?php
include"koneksi.php";
if (!empty($_REQUEST['act2'])){
if ($_REQUEST['act2']=="del_kembali"){
$query_delete=mysql_query("delete from pengembalian where noKembali='$_REQUEST[noKembali]'");
echo "<script language>alert('Data berhasil dihapus - delete from pengembalian where noKembali='$_REQUEST[act2]'');</script>";}}

$totaldata = 8;
if(isset($_GET['page'])){ $noPage=$_GET['page']; } else { $noPage=1; }
$offset=($noPage-1)*$totaldata;
$query="SELECT * FROM pengembalian order by tglKembali desc LIMIT $offset, $totaldata";
$result=mysql_query($query) or die('Error');
$query="SELECT COUNT(*) AS jumData FROM pengembalian";
$hasil=mysql_query($query) ;
$data=mysql_fetch_array($hasil);
$jumData=$data['jumData'];
$jumPage=ceil($jumData/$totaldata);
?>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th width="6"  class="rounded-company" ></th>
            <th width="129"  class="rounded" >Buku yang kembali</th>
            <th width="101"  class="rounded" >Peminjam</th>
            <th width="75"  class="rounded" >Tanggal kembali</th>
            <th width="102"  class="rounded-q4" >Hapus Riwayat</th>
          
        </tr>
    </thead>
   <?php
  
    while($data = mysql_fetch_array($result)){

$rowsiswa = mysql_query("select * from siswa where nis='".$data['1']."'");  
$siswa = mysql_fetch_array($rowsiswa); 
$rowbuku = mysql_query("select * from buku where kdBuku='".$data['2']."'");  
$buku = mysql_fetch_array($rowbuku); ?>

    <tbody>
    	<tr> 
        	<td>&bull;</td>
           <td><?php echo"$buku[2]"; ?></td>
            <td><?php echo"$siswa[2]"; ?></td>
            <td><?php echo"$data[3]"; ?></td>
          
                      <td><?php echo"<a href='index.php?act=pengembalian&act2=del_kembali&noKembali=$data[0]' onClick='return confirm(\" Apakah anda yakin untuk menghapus data ini?\");'><img src=images/trash.png border=0 /></a>";?></td>
	    </tr> 
       
    </tbody>
    <?php } ?>
</table>
<br /><br />
<div class="pagination">
	<?php
	if ($noPage > 1){ echo  "<a href='".$_SERVER['PHP_SELF']."?act=pengembalian&&page=".($noPage-1)."'>Sebelumnya</a>"; }
	else { echo "<span class=disabled>Sebelumnya</span>"; }
	for($page = 1; $page <= $jumPage; $page++)
	{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
         {   
		  if (($page != 1) && ($page != 2)&& ($page != 3)&& ($page != 4))  echo "..."; 
            if (($page != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            
			if ($page == $noPage) echo "<span class=current>$page</span>";
            else echo "<a href='".$_SERVER['PHP_SELF']."?act=pengembalian&&page=".$page."'>".$page."</a>";
            $showPage = $page;          
         }
	}
	if ($noPage < $jumPage){ echo "<a href='".$_SERVER['PHP_SELF']."?act=pengembalian&&page=".($noPage+1)."'>Selanjutnya</a>"; }
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