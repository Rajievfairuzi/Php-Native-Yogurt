<?php
session_start();    
  include "koneksi.php";
 $username=@$_SESSION['username']; 
 if (empty($username)) {
    header("location:login.php"); 
 }
?>
 
<!DOCTYPE html>

<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                        <li><a href="login.php"><i ></i>Logout</a>
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
                    
                        <!-- user image section-->
                        <div class="user-section" align="center">
                            
                                <img src="assets/img/admin.png" width="190px" height="180px" >
                            
                          
                        </div>
                        <!--end user image section-->
                    
                 
                    <li class="selected">
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>                 
                    <li>
                        <a href="tampilProduk.php"><i class="fa fa-table fa-fw"></i>Produk<span class="fa arrow"></span></a>                                               
                    </li> 
                    <li>
                        <a href="tampilBlog.php"><i class="fa fa-table fa-fw"></i>Blog <span class="fa arrow"></span></a>                                               
                    </li>      
                   
                     <li>
                        <a href="tampilKategori.php"><i class="fa fa-table fa-fw"></i>Kategori <span class="fa arrow"></span></a>                                               
                    </li> 
                     <li>
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
                    <h1 class="page-header">Dashboard</h1>
                </div>

            </nav>

          
            <div class="row">
                <!-- Welcome -->
                <div >  
                 <center><h3>Pada Halaman Ini Anda Memiliki Hak Akses Mengelola data Seperti : Menambah, Mengedit dan Menghapus</h3></center>   
                               
                </div>
                <!--end  Welcome -->
           
                 <script>
                function print_d(){
                window.open("print.php","_blank");
                }
                </script>
                
            </div>
            <tr align="center">

<button align="center" class="btn btn-info" onclick="print_d()">Print Data</button>
</tr>
            

         
<table align="center" border="0" width="1000">
</table>
<div class="info1">
      

<div class="box box-primary">
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr bgcolor="#778899" class="style4">
                    <td>ID Pesan</td>
                    <td>Pengirim</td>
                    <td>Email</td>
                    <td>Subject</td>
                    <td>Isi</td> 
                    <td>Waktu</td> 
                    <td>Hapus </td>   
                </tr>
            </thead>
         
            <tbody>
                <?php
                include "koneksi.php";
                $Cari="SELECT * FROM pesan ";
                $sql = mysqli_query($connect, $Cari);
                while ( $hasil = mysqli_fetch_array ($sql)) {
                    $idPesan = stripslashes ($hasil['idPesan']);
                    $nama = stripslashes ($hasil['nama']);
                    $email = stripslashes ($hasil['email']);
                    $subject = stripslashes ($hasil['subject']);
                    $isi = stripslashes ($hasil['isi']);
                     $waktu = stripslashes ($hasil['tgl']);
                    {
                        ?> 
                        <tr align="center" bgcolor="#ffffff" class="style5">
                            <td><?=$idPesan?><div align="center"></div></td>
                            <td><?=$nama?><div align="center"></div></td>
                            <td><?=$email?><div align="center"></div></td>
                            <td><?=$subject?><div align="center"></div></td>
                            <td><?=$isi?><div align="center"></div></td>
                             <td><?=$waktu?><div align="center"></div></td>
                          
                           
                            <td bgcolor=" #ffffff"><div><a class="btn btn-danger" href="hapusPesan.php?idPesan=<?=$idPesan?>" title="click for delete" onclick="return confirm('Anda yakin untuk menghapus ?')"><span class="glyphicon glyphicon-remove-circle"></span></a></div></td>
                        </tr>
                        <?php  
                    }
                }
                ?>
            </tbody>

        </table>

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
