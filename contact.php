<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
       <title>frozenyogurtshop | Tentang </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/highcharts.js" type="text/javascript"></script>
        <script src="Chart.bundle.js"></script>
        <style type="text/css">
            .containeri {
                width: 50%;
                margin: 15px auto;
            }
        </style>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

     <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.php"><img src="assets/images/logoo.png" style="width: 150px;height: 40px;margin-top:-5px"></a>
                  
                </div>

                  <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a  href="index.html">Home</a></li>    
                 
                    <li class="has-child"><a href="#">About </a>
                      <ul class="submenu">
                         <li class="submenu-item"><a href="#">Produk</a></li></ul>
                    </li>
                     <li class="has-child"><a href="#">Blog </a>
                      <ul class="submenu">
                         <li class="submenu-item"><a href="#">Single Post</a></li></ul>
                    </li>
                    

                    <li ><a class="is-active" href="contact.php">Contact</a></li>
                    <li><a href="admin/login.php">Login</a></li>


                  </ul>
                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Contact<span class="title-under"></span></h1>
					
		</div>

	</div>


<form action="simpanPesan.php" method="post" name="form2" enctype="multipart/form-data" />
<table border="0" align="center">

<tr>
<td><input type="text" name="idPesan" value="" hidden=" "/></td>
</tr>

<tr>
    <td><p>Nama</p></td>
    <td><p>: </p></td>
    <td><p><input class="form-control" type="text" name="nama"  /></p></td>
</tr>

<tr>
    <td><p>Email</p></td>
    <td><p>: </p></td>
    <td><p><input class="form-control" type="email" name="email"  /></p></td>
</tr>
<tr>
    <td><p>Subject</p></td>
    <td><p>: </p></td>
    <td><p><input class="form-control" type="text" name="subject"  /></p></td>
</tr>

<tr>
    <td><p>ISI Pesan</p></td>
    <td><p>: </p></td>
      <td><p><textarea class="form-control" type="text" name="isi" ></textarea></p></td>
</tr>
<tr>
<td><input type="text" name="tgl" value="" hidden=" "/></td>
</tr>
<tr align="center">
<td><p><input type="submit" class="btn btn-primary" value="Simpan" /></p></td>

</form>


</table>
	<div class="section-home home-reasons">

        

    </div> <!-- /.home-reasons -->




     <!-- /.main-container  -->


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <p>
                                    <strong>This website template has been designed by freewebsitetemplates.com </strong> 
                                    You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template.
                                </p> 

                                
                            </div>
                            
                        </div>

                    </div>

        

            
 
    </body>
</html>
