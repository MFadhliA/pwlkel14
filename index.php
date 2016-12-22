
<?php if (!isset($_SESSION)){ session_start(); }
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpustakaan</title>
<br /><br /><br /><br />

 
<?php include"atas.php" ; ?>  
<?php include"scr.php" ; ?>


</head>
<body>
<div id="main_container">
	<div class="header">
	<?php include"header.php" ; ?>
	<div class="main_content">
<?php include"menu.php" ; ?>
    <div class="center_content">  
    <?php include"kiri.php" ; ?>
    <div class="right_content">  
           
     
    <?php include"select.php" ; ?>

    </div>
  	</div> <!--end of center content -->               
    <div class="clear"></div>
    </div> <!--end of main content-->
	<?php include"footer.php" ; ?>
</body>
</html>