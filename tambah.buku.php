<h2>Admin - Tambah Buku</h2>
<?php
include"koneksi.php";
$queryktr="select * from kategoribuku";
$ktr=mysql_query($queryktr);
$querypnb="select * from penerbit";
$pnb=mysql_query($querypnb);
$querypng="select * from pengarang";
$png=mysql_query($querypng);

?>
 <div class="form">
         <form action="tambahbkproses.php" method="post" class="niceform" enctype="multipart/form-data" name="form1" id="form1">
         
                <fieldset>
                
                     <dl>
                        <dt><label>Judul Buku:</label></dt>
                        <dd><input type="text" name="Judul" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label>Jumlah Stok:</label></dt>
                        <dd><input type="text" name="jmlStok" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="gender">Katagori Buku:</label></dt>
                        <dd>
                            <select size="1" name="kdKategori" id="">
                            
<?php while ($ktr1=mysql_fetch_row($ktr))
{ ?>
<option value="<?php echo"$ktr1[0]"; ?>"><?php echo"$ktr1[1]"; ?></option>
                        <?php } ?>
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                          <label for="gender">Pengarang Buku:</label></dt>
                        <dd>
                            <select size="1" name="kdPengarang" id="">
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
<?php while ($pnb1=mysql_fetch_row($pnb))
{ ?>
<option value="<?php echo"$pnb1[0]"; ?>"><?php echo"$pnb1[1]"; ?></option>
                        <?php } ?>
                            </select>
                        </dd>
                    </dl>
                   
                                         <dl>
                        <dt><label>Tempat Buku:</label></dt>
                        <dd><input type="text" name="Tempat" value="<?php echo"$row[7]"; ?>" size="54" /></dd>
                    </dl>

                    
                    <dl>
                        <dt><label for="upload">Sampul:</label></dt>
                        <dd><input type="file" name="Gambar" id="upload" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="comments">Preview:</label></dt>
                        <dd><textarea name="preview" id="comments" rows="5" cols="36" size="54"></textarea></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="btnSimpan" id="submit" value="Tambahkan" />
                     </dl>
                </fieldset>
                
         </form>
        </div>  