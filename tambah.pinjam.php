<h2>Admin - Tambah Peminjaman</h2>
<?php
include"koneksi.php";
$querybuku="select * from buku";
$buku=mysql_query($querybuku);
$querysiswa="select * from siswa";
$siswa=mysql_query($querysiswa);
?>
 <div class="form">
         <form action="proses.pinjam.php" method="post" class="niceform" enctype="multipart/form-data" name="form1" id="form1">
         
                <fieldset>
                
                                    <dl>
<dt><label for="gender">Peminjam:</label></dt>
<dd>
                            <select size="1" name="nis" id=""  >
                            
<?php while ($siswa1=mysql_fetch_row($siswa))
{ ?>
<option value="<?php echo"$siswa1[1]"; ?>">(NIS : <?php echo"$siswa1[1]"; ?>) - <?php echo"$siswa1[2]"; ?></option>
                        <?php } ?>
                            </select>
                        </dd>
                 
                   </dl>
                <dl>
<dt><label for="gender">Buku Yang Dipinjam:</label></dt>
<dd>
                            <select size="1" name="kdBuku" id=""  >
                            
<?php while ($buku1=mysql_fetch_row($buku))
{ ?>
<option value="<?php echo"$buku1[0]"; ?>"><?php echo"$buku1[2]"; ?> (Stok : <?php echo"$buku1[6]"; ?>)</option>
                        <?php } ?>
                            </select>
                        </dd>
                 
                   </dl>

                    <dl>
                     <dl class="submit">
                     <input type="hidden" name="tgl" value="<?php $tgl=date('Y-m-d'); echo $tgl ?>" id="hiddenField" />
                    <input type="submit" id="submit" value="Tambahkan" />
                     </dl>
                </fieldset>
                
         </form>
        </div>  