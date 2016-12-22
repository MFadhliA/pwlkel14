       <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">PERPUSTAKAAN MUSABA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
       

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
             
<?php if (!isset($_SESSION)){ session_start(); }

if (empty($_SESSION))
{
	?>                    
          <a href="?act=login" ><i class="fa fa-user"></i>&nbsp;Masuk&nbsp;</a>   
             <?php
}
else{ ?>
             
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo"".$_SESSION['namaUser'].""; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
              
              
              <?php
}

?>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
   <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>