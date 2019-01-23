<?php
include "koneksi.php";


 $query = "SELECT * FROM admin"; // Query untuk menampilkan semua data 
    $sql = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>

    <!--  wrapper -->   
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logoo.png"  width="150px" height="150px"  />
                </a>
            </div>

            <!-- end navbar-header -->
            <!-- navbar-top-links -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->            

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section" align="center">
                            
                                <img src="assets/img/admin.png" width="190px" height="180px" >
                            
                          
                        </div>
                           <li >
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>                 
                    <li >
                        <a href="tampilProduk.php"><i class="fa fa-table fa-fw"></i>Produk<span class="fa arrow"></span></a>                                               
                    </li> 
                    <li>
                        <a href="tampilBlog.php"><i class="fa fa-table fa-fw"></i>Blog <span class="fa arrow"></span></a>                                               
                    </li>      
                   
                     <li>
                        <a href="tampilKategori.php"><i class="fa fa-table fa-fw"></i>Kategori <span class="fa arrow"></span></a>                                               
                    </li> 
                     <li class="selected">
                        <a href="tampilAdmin.php"><i class="fa fa-table fa-fw"></i>Admin <span class="fa arrow"></span></a>                                               
                    </li>               
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

           <nav class="navbar navbar-default">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Admin</h1>
                </div>

            </nav>


<form action="simpantambahadmin.php" method="post" name="form2" enctype="multipart/form-data" />
<table border="0" align="center">

<tr>
<td><input type="text" name="idAdmin" value="" hidden=" "/></td>
</tr>

<tr>
    <td><p>Nama</p></td>
    <td><p>:</p></td>
    <td><p><input class="form-control" type="text" name="namaAdmin" size="20"  /></p></td>
</tr>

<tr>
    <td><p>Username</p></td>
    <td><p>:</p></td>
    <td><p><input class="form-control" type="text" name="username" size="20"  /></p></td>
</tr>
<tr>
    <td><p>Password</p></td>
    <td><p>:</p></td>
    <td><p><input class="form-control" type="text" name="password" size="20"  /></p></td>
</tr>
<tr align="center">
<td><p><input type="submit" class="btn btn-primary" value="Simpan" /></p></td>

</form>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<form action="tampilAdmin.php" name="back" method="post">
    <td><p><input name="submit" class="btn btn-primary" type="submit" value="Back" /></p></td>

</form>

</table>






  <div class="container-fluid">
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
