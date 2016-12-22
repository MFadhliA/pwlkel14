<h2>Admin - Edit Siswa</h2>
<?php
include"koneksi.php";
$query=mysql_query("select*from siswa where kdSiswa='$_GET[kdSiswa]'");
$row=mysql_fetch_array($query);
$querykls="select * from kelas";
$kls=mysql_query($querykls);
$queryakt="select * from angkatan";
$akt=mysql_query($queryakt);

$querykls2=mysql_query("select*from kelas where id_kelas='".$row['3']."'");
$rowkls=mysql_fetch_array($querykls2);
$queryakt2=mysql_query("select*from angkatan where no='".$row['4']."'");
$rowakt=mysql_fetch_array($queryakt2);
?>
<div class="form">
         <form method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt>
                      <label >NIS:</label></dt>
                        <dd><input type="text" name="nis" value="<?php echo"$row[1]";?>" size="54" /></dd>
                    </dl>
                    <dl>
                      <dt>
                      <label>Nama:</label></dt>
                        <dd><input type="text" name="nama" value="<?php echo"$row[2]";?>" size="54" /></dd>
                    </dl><dl>
                      <dt>
                      <label>Alamat:</label></dt>
                        <dd><input type="text" name="alamat" value="<?php echo"$row[6]";?>" size="54" /></dd>
                    </dl>
                    
              <dl>
                        <dt>
                      <label>Kelas:</label></dt>
                        <dd>
                            <select size="1" name="id_kelas" id="">
                            <option value="<?php echo"$rowkls[0]"; ?>"><?php echo"$rowkls[1]"; ?></option>

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
                    <option value="<?php echo"$rowakt[0]"; ?>"><?php echo"$rowakt[1]"; ?></option>

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
                  
        
          <option <?php if("$row[jenis_kelamin]"=="L"){
echo  "selected=selected";} ?>>Laki-Laki</option>
          <option <?php if("$row[jenis_kelamin]"=="P"){
echo  "selected=selected";} ?>>Perempuan</option>
        
          </select>
                      </dd>
                    </dl>
                    <dl>
                        <dt>
                      <label>No. HP:</label></dt>
                        <dd><input type="text" name="no_hp" value="<?php echo"$row[7]";?>" size="54" /></dd>
                    </dl>
                  <dl>
                        <dt>
                      <label>Email:</label></dt>
                        <dd><input type="text" name="email" value="<?php echo"$row[8]";?>" size="54" /></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="simpan" id="submit" value="Simpan" />
                    
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>
<?php 
include"koneksi.php";

$nis=$_POST['nis'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$id_kelas=$_POST['id_kelas'];
$angkatan=$_POST['angkatan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_hp=$_POST['no_hp'];
$email=$_POST['email'];

if($_POST['simpan']){
$a=mysql_query("update siswa set nis='$nis',nama='$nama',alamat='$alamat',id_kelas='$id_kelas',angkatan='$angkatan' ,jenis_kelamin='$jenis_kelamin' ,no_hp='$no_hp' , email='$email' where kdSiswa='$_GET[kdSiswa]'");
	
	echo"<script>window.alert('Data Berhasil diperbarui');</script>"; 
	print '<meta http-equiv=refresh content=1;url=index.php?act=admin.siswa>';		
}
?>
   