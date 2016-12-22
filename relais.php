<?php include "koneksi.php";
	$query=mysql_query("select*from buku");
	$row=mysql_fetch_array($query);
	$rowset = mysql_query("select * from pengarang where idPengarang='".$row['kdPengarang']."'");  
    $pengarang = mysql_fetch_array($rowset);
            
	?>
	<?php echo"$row[5]";?><br>
	

			<?php echo"$pengarang[1]"; ?>