<?php if ($_SESSION['level']== "2"){?>
<div class="products">  
<h2>Admin - Data Peminjaman</h2>
<?php
include"koneksi.php";

$totaldata = 8;
if(isset($_GET['page'])){ $noPage=$_GET['page']; } else { $noPage=1; }
$offset=($noPage-1)*$totaldata;
$query="SELECT * FROM pinjam order by tglPinjam desc LIMIT $offset, $totaldata";
$result=mysql_query($query) or die('Error');
$query="SELECT COUNT(*) AS jumData FROM pinjam";
$hasil=mysql_query($query) ;
$data=mysql_fetch_array($hasil);
$jumData=$data['jumData'];
$jumPage=ceil($jumData/$totaldata);
?>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th  class="rounded-company" ></th>
            <th  class="rounded" >Buku yang di pinjam</th>
            <th  class="rounded" >Peminjam</th>
            <th  class="rounded" >Tanggal peminjaman</th>
            <th  class="rounded-q4" >Aksi</th>
          
        </tr>
    </thead>
   <?php
  
    while($data = mysql_fetch_array($result)){

$rowsiswa = mysql_query("select * from siswa where nis='".$data['1']."'");  
$siswa = mysql_fetch_array($rowsiswa); 
$rowbuku = mysql_query("select * from buku where kdBuku='".$data['2']."'");  
$buku = mysql_fetch_array($rowbuku); ?>

    <tbody><form action="proses.kembali.php" method="post">
    	<tr> 
        	<td>&bull;</td>
           <td><?php echo"$buku[2]"; ?></td>
            <td><?php echo"$siswa[2]"; ?></td>
            <td><?php echo"$data[3]"; ?></td>
            <input type="hidden" name="nis" value="<?php echo"$data[1]"; ?>" id="hiddenField" />
            <input type="hidden" name="kdBuku" value="<?php echo"$data[2]"; ?>" id="hiddenField" />
            <input type="hidden" name="noPinjam" value="<?php echo"$data[0]"; ?>" id="hiddenField" />
            <input type="hidden" name="tglKembali" value="<?php $tgl=date('Y-m-d'); echo $tgl ?>" id="hiddenField" />
                      <td><input type="submit" id="submit"  value="Kembalikan"/></td>
	    </tr> 
        </form>   
    </tbody>
    <?php } ?>
</table>
<br /><br />
<div class="pagination">
	<?php
	if ($noPage > 1){ echo  "<a href='".$_SERVER['PHP_SELF']."?act=peminjaman&&page=".($noPage-1)."'>Sebelumnya</a>"; }
	else { echo "<span class=disabled>Sebelumnya</span>"; }
	for($page = 1; $page <= $jumPage; $page++)
	{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
         {   
		  if (($page != 1) && ($page != 2)&& ($page != 3)&& ($page != 4))  echo "..."; 
            if (($page != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            
			if ($page == $noPage) echo "<span class=current>$page</span>";
            else echo "<a href='".$_SERVER['PHP_SELF']."?act=peminjaman&&page=".$page."'>".$page."</a>";
            $showPage = $page;          
         }
	}
	if ($noPage < $jumPage){ echo "<a href='".$_SERVER['PHP_SELF']."?act=peminjaman&&page=".($noPage+1)."'>Selanjutnya</a>"; }
	else { echo "<span class=disabled>Selanjutnya</span>"; }
	?>
         </div> 
           <a href="?act=tambah.pinjam" class="bt_green"><span class="bt_green_lft"></span><strong>Tambah Peminjaman</strong><span class="bt_green_r"></span></a>
          </div>
               <?php
}
else {
?>
<script language="JavaScript">alert('Maaf anda harus login sebagai admin terlebih dahulu');
	 window.history.back()</script><?php
} ?>