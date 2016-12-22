<div class="products">  
<h2>Daftar Semua Buku</h2>
<?php
include"koneksi.php";

$totaldata = 4;
if(isset($_GET['page'])){ $noPage=$_GET['page']; } else { $noPage=1; }

$offset=($noPage-1)*$totaldata;
$query="SELECT * FROM buku order by kdBuku desc LIMIT $offset, $totaldata";
$result=mysql_query($query) or die('Error');
$query="SELECT COUNT(*) AS jumData FROM buku";
$hasil=mysql_query($query) ;
$data=mysql_fetch_array($hasil);
$jumData=$data['jumData'];
$jumPage=ceil($jumData/$totaldata);

while($data = mysql_fetch_array($result)){ 
$rowset = mysql_query("select * from pengarang where idPengarang='".$data['kdPengarang']."'");  
$pengarang = mysql_fetch_array($rowset);?>
<!--konten mbang --> 		
	<ul>
		<li>
			<div class="product">
				<a href="index.php?act=detail&&kdBuku=<?php echo"$data[kdBuku]"; ?>" class="info">
					<span class="holder">
						<img src="<?php echo"$data[gambar]"; ?>" width="103" height="150" />
                        <table width="126" height="117" border="0">
  <tr>
    <td align="left" valign="top" >
    <span class="book-name"><?php echo"$data[Judul]"; ?></span>
						<span class="author"><?php
						echo"$pengarang[1]"; ?></span>
						<span class="description"></span>
    </td>
  </tr>                      
</table>
					</span>
				</a>
				<a href="index.php?act=detail&&kdBuku=<?php echo"$data[kdBuku]"; ?>" class="buy-btn">Detail <span class="price"><span class="low"></span><span class="high"></span></span></a>
		    </div>
            
	    </li>

        </ul>
<!--mulai konten mbang --> 
<?php } ?>


<br /><br />
<div class="pagination">

	<?php
	if ($noPage > 1){ echo  "<a href='".$_SERVER['PHP_SELF']."?act=buku&&page=".($noPage-1)."'>Sebelumnya</a>"; }
	else { echo "<span class=disabled>Sebelumnya</span>"; }
	for($page = 1; $page <= $jumPage; $page++)
	{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
         {   
		  if (($page != 1) && ($page != 2)&& ($page != 3)&& ($page != 4))  echo "..."; 
            if (($page != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            
			if ($page == $noPage) echo "<span class=current>$page</span>";
            else echo "<a href='".$_SERVER['PHP_SELF']."?act=buku&&page=".$page."'>".$page."</a>";
            $showPage = $page;          
         }
	}
	if ($noPage < $jumPage){ echo "<a href='".$_SERVER['PHP_SELF']."?act=buku&&page=".($noPage+1)."'>Selanjutnya</a>"; }
	else { echo "<span class=disabled>Selanjutnya</span>"; }
	?>
	</div>  
       </div>
