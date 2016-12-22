<h2>Admin - Tambah Siswa</h2>
<?php
include"koneksi.php";
$querykls="select * from kelas";
$kls=mysql_query($querykls);
$queryakt="select * from angkatan";
$akt=mysql_query($queryakt);


?>
<div class="form">
         <form method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt>
                      <label >NIS:</label></dt>
                        <dd><input type="text" name="nis" id="" size="54" /></dd>
                    </dl>
                    <dl>
                      <dt>
                      <label>Nama:</label></dt>
                        <dd><input type="text" name="nama" id="" size="54" /></dd>
                    </dl><dl>
                      <dt>
                      <label>Alamat:</label></dt>
                        <dd><input type="text" name="alamat" id="" size="54" /></dd>
                    </dl>
                    
              <dl>
                        <dt>
                      <label>Kelas:</label></dt>
                        <dd>
                            <select size="1" name="id_kelas" id="">
                              <?php while ($kls1=mysql_fetch_row($kls))
{ ?>
<option value="<?php echo"$kls1[0]"; ?>"><?php echo"$kls1[1]"; ?></option>
                        <?php } ?>


                            </select>
                        </dd>
                    </dl>
                    <dl>
                      <dt><label>Angkatan:</label></dt>
                      
                        <dd>
                    <select size="1" name="angkatan"  >
                   <?php while ($akt1=mysql_fetch_row($akt))
{ ?>
<option value="<?php echo"$akt1[0]"; ?>"><?php echo"$akt1[1]"; ?></option>
                        <?php } ?>
 
          </select>
                        </dd>
                    </dl>
                <dl>
                      <dt><label>Jenis Kelamin:</label></dt>
                      
                        <dd>
                    <select size="1" name="jenis_kelamin"  >
                    
          <option value="L" >Laki-Laki</option>
          <option value="P" >Perempuan</option>
          </select>
                      </dd>
                    </dl>
                    <dl>
                        <dt>
                      <label>No. HP:</label></dt>
                        <dd><input type="text" name="no_hp" id="" size="54" /></dd>
                    </dl>
                  <dl>
                        <dt>
                      <label>Email:</label></dt>
                        <dd><input type="text" name="email" id="" size="54" /></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="tambah" id="submit" value="Tambah Siswa" />
                    
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>
          <?php

if($_POST['tambah']){
$run=mysql_query("insert into siswa (kdSiswa,nis,nama,id_kelas,angkatan,jenis_kelamin,alamat,no_hp,email) values ('$_POST[kdSiswa]','$_POST[nis]','$_POST[nama]','$_POST[id_kelas]','$_POST[angkatan]','$_POST[jenis_kelamin]','$_POST[alamat]','$_POST[no_hp]','$_POST[email]')");
	echo "<script language> alert('Anda berhasil menambah data siswa');</script>";
		print '<meta http-equiv=refresh content=1;url=index.php?act=admin.siswa>'; } ?>  