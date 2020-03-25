<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
     <?php
        include "bundle_css.php";  
       ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include "content_header.php";  
       ?>
      <!-- Left side column. contains the logo and sidebar -->
       <?php
        include "aside.php";  
       ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
					<h1><center><b>BUAH</b></center></h1>
					<center><img src="../aset/foto/ids.jpg" width="225" height="225" /></center>
					<center><h2><b>Sistem Informasi Pengiriman Buah &copy;  <?php echo date ('Y') ?></b></h2></center>
					<center><h4><b>Jombang</b></h4></center>
                </div><!-- /.box-header -->
                <div class="box-body">
					
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
 <?php
    include "bundle_script.php";
  ?>
   
  </body>
</html>
