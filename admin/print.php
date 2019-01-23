  
<html>
<head>
  <title>Print Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <table border="1" width="90%" style="border-collapse:collapse;" align="center">
            <thead>
                <tr class="tableheader" align="center">
                    <td>ID Produk</td>
                    <td>ID Kategori</td>
                    <td>Nama</td>
                    <td>Keterangan</td>
                    <td>Foto</td>
                   
                 
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
                        <tr>
                            <td><?=$idProduk?><div align="center"></div></td>
                            <td><?=$idKategori?><div align="center"></div></td>
                            <td><?=$namaProduk?><div align="center"></div></td>
                            <td><?=$ketProduk?><div align="center"></div></td>
                           
                            <td><img src=gambar/<?=$fotoProduk?> width='100' height='100'><div ss></div></td>
                          
                        </tr>
                        <?php  
                    }
                }
                ?>
            </tbody>

        </table>
    <script>
    window.load = print_d();
    function print_d(){
      window.print();
    }
  </script>
</body>
</html>