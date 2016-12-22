<?php 
include"koneksi.php";
$q="select * from kategoribuku";
$hasil=mysql_query($q);
?>
<div class="left_content">
    
    
  <div class="sidebarmenu">
            
                <a class="menuitem submenuheader" href="">Kategori Buku</a>
                <div class="submenu">
 <?php while ($row=mysql_fetch_row($hasil))
{ ?>
      
           <ul>
                    <li><a href="?act=buku.<?php echo"$row[0]"; ?>"><?php echo"$row[1]"; ?></a></li>
       </ul>
                             <?php } ?>
                </div>
                
               <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));  if ($_SESSION['level']== "2") { 
				   ?>
				   
				    <a class="menuitem submenuheader" href="" >Menu Admin</a>
                <div class="submenu">
                    <ul>
                    <li><a href="?act=admin.buku">Data Buku</a></li>
                    <li><a href="?act=admin.siswa">Data Siswa</a></li>
                    <li><a href="?act=peminjaman">Data Peminjaman</a></li>
                    <li><a href="?act=pengembalian">Data Pengembalian</a></li>
           
                    </ul>
                </div>
				   <?php
}
else {

} ?>
               
            </div> <br />  <br /> 
            
          <?php include"jam.php"; ?> 
          <br />  <br />  

              
 <?php include"kalender.php"; ?>
              
    
</div>