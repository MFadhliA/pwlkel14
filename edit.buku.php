<h2>Edit Buku</h2>
<?php
include"koneksi.php";
$query=mysql_query("select*from buku where kdBuku='$_GET[kdBuku]'");
$row=mysql_fetch_array($query);
$queryktr="select * from kategoribuku";
$ktr=mysql_query($queryktr);
$querypnb="select * from penerbit";
$pnb=mysql_query($querypnb);
$querypng="select * from pengarang";
$png=mysql_query($querypng);
$queryktr2=mysql_query("select*from kategoribuku where kdKategori='".$row['1']."'");
$rowktr=mysql_fetch_array($queryktr2);
$querypnb2=mysql_query("select*from penerbit where kdPenerbit='".$row['4']."'");
$rowpnb=mysql_fetch_array($querypnb2);
$querypng2=mysql_query("select*from pengarang where idPengarang='".$row['3']."'");
$rowpng=mysql_fetch_array($querypng2);
?>
 <div class="form">
         <form action="editbkproses.php" method="post" class="niceform" enctype="multipart/form-data" name="form1" id="form1">
         
                <fieldset>
                <input name="kdBuku" type="hidden" value="<?php echo"$row[0]";?>" />
                     <dl>
                        <dt><label>Judul Buku:</label></dt>
                        <dd><input type="text" name="Judul" value="<?php echo"$row[2]"; ?>" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label>Jumlah Stok:</label></dt>
                        <dd><input type="text" name="jmlStok" value="<?php echo"$row[6]"; ?>" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label>Katagori Buku:</label></dt>
                        <dd>
                            <select size="1" name="kdKategori" id="">
<option value="<?php echo"$rowktr[0]"; ?>"><?php echo"$rowktr[1]"; ?></option>
<?php while ($ktr1=mysql_fetch_row($ktr))
{ ?>
<option value="<?php echo"$ktr1[0]"; ?>"><?php echo"$ktr1[1]"; ?></option>
                        <?php } ?>
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                          <label>Pengarang Buku:</label></dt>
                        <dd>
                            <select size="1" name="kdPengarang" id="">
<option value="<?php echo"$rowpng[0]"; ?>"><?php echo"$rowpng[1]"; ?></option>
<?php while ($png1=mysql_fetch_row($png))
{ ?>
<option value="<?php echo"$png1[0]"; ?>"><?php echo"$png1[1]"; ?></option>
                        <?php } ?>
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="gender">Penerbit Buku:</label></dt>
                        <dd>
                            <select size="1" name="kdPenerbit" id="">
<option value="<?php echo"$rowpnb[0]"; ?>"><?php echo"$rowpnb[1]"; ?></option>
<?php while ($pnb1=mysql_fetch_row($pnb))
{ ?>
<option value="<?php echo"pnb1[0]"; ?>"><?php echo"$pnb1[1]"; ?></option>
                        <?php } ?>
                            </select>
                        </dd>
                    </dl>
                     <dl>
                        <dt><label>Tempat Buku:</label></dt>
                        <dd><input type="text" name="Tempat" value="<?php echo"$row[7]"; ?>" size="54" /></dd>
                    </dl>
                    
                    <dl>
                    <dl>
                        <dt><label for="upload">Sampul:</label></dt>
                        <dd><input type="file" name="Gambar" id="upload" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label>Preview:</label></dt>
                        <dd><input type="text" name="preview" value="<?php echo"$row[8]"; ?>" size="54"></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="btnSimpan" id="submit" value="Simpan" />
                     </dl>
                </fieldset>
         </form>
        </div>  