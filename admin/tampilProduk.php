<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
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
                    <li class="selected">
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
                    <h1 class="page-header">Produk</h1>
                </div>

            </nav>


            <div class="row">
                <!-- Welcome -->
                
                <form action="tambahProduk.php" name="gabungan" method="post">
<table align="center" border="0" width="1000">
<tr align="center">
<td><input type="submit" class="btn btn-info" value="Tambah" /></td>

</tr>
</table>
<div class="info1">
      

<div class="box box-primary">
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr bgcolor="#778899" class="style4">
                    <td>ID Pariwisata</td>
                    <td>ID Kategori</td>
                    <td>Nama</td>
                    <td>Keterangan</td>
                    <td>Foto</td> 
                    <td>Edit </td>
                    <td>Hapus </td>   
                </tr>
            </thead>
         
            <tbody>
                <?php
                include "koneksi.php";
                $Cari="SELECT * FROM produk ";
                $sql = mysqli_query($connect, $Cari);
                while ( $hasil = mysqli_fetch_array ($sql)) {
                    $idProduk = stripslashes ($hasil['idProduk']);
                    $idKategori = stripslashes ($hasil['idKategori']);
                    $namaProduk = stripslashes ($hasil['namaProduk']);
                    $ketProduk = stripslashes ($hasil['ketProduk']);
                    $fotoProduk = stripslashes ($hasil['fotoProduk']);
                    {
                        ?> 
                        <tr align="center" bgcolor="#ffffff" class="style5">
                            <td><?=$idProduk?><div align="center"></div></td>
                            <td><?=$idKategori?><div align="center"></div></td>
                            <td><?=$namaProduk?><div align="center"></div></td>
                            <td><?=$ketProduk?><div align="center"></div></td>
                           
                            <td><img src=gambar/<?=$fotoProduk?> width='100' height='100'><div align="center"></div></td>
                            
                            <td bgcolor=" #ffffff"><div align="center"> <a class="btn btn-info" href="editProduk.php?idProduk=<?=$idProduk?>" title="click for edit" onclick="return confirm('Anda yakin untuk mengedit ?')"><span class="glyphicon glyphicon-edit"></span></a></div></td>
                            <td bgcolor=" #ffffff"><div><a class="btn btn-danger" href="hapusProduk.php?idProduk=<?=$idProduk?>" title="click for delete" onclick="return confirm('Anda yakin untuk menghapus ?')"><span class="glyphicon glyphicon-remove-circle"></span></a></div></td>
                        </tr>
                        <?php  
                    }
                }
                ?>
            </tbody>

        </table>

    </div><!-- /.box-body -->

</div><!-- /.box -->

</div>

</div>
</div>
</div>

                <!--end  Welcome -->

                <!--end  Welcome -->
            </div>



            <div class="row">
                <div class="col-lg-8">



                    <!--Area chart example -->
                          
                </div>
            </div>


         


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
