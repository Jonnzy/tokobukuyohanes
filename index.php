<?php
include 'koneksi.php';   
$query = "select * from tbbuku limit 50";
$result = mysqli_query($konek, $query); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <!-- <title>FORM DATA BUKU XI TJKT 2</title> -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-4">
     <div class="row">
         <div class="col-md-12">
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 Tempat menulis pesan
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true"></span>
                 </button>
             </div>
         </div>
         <div class="col-md-12">
             <div class="float-left mb-4">
                 <h2>DATA BUKU</h2>
             </div>
             <div class="float-right">
                 <a href="#" class="btn btn-success">Tambah Data Buku</a>
             </div>
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">Kode Buku</th>
                         <th scope="col">Kategori</th>
                         <th scope="col">Pengarang</th>
                         <th scope="col">Penerbit</th>
                         <th scope="col">Judul</th>
                         <th scope="col">Tahun</th>
                         <th scope="col">Harga</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php if ($result->num_rows > 0): ?>
                 <?php while($buku = mysqli_fetch_assoc($result)): ?>
                     <tr>
                         <th scope="row"><?php echo $buku['kd_buku'];?></th>
                         <td><?php echo $buku['kategori'];?></td>
                         <td><?php echo $buku['pengarang'];?></td>
                         <td><?php echo $buku['penerbit'];?></td>
                         <td><?php echo $buku['judul'];?></td>
                         <td><?php echo $buku['tahun'];?></td>
                         <td><?php echo $buku['harga'];?></td>
                         <td>
                             <a href="#" class="btn btn-primary">Edit</a>
                             <a href="#" class="btn btn-danger">Hapus</a>
                         </td>
                     </tr>
                 <?php endwhile; ?>
                 <?php else: ?>
                 <tr>
                     <td colspan="3" rowspan="1" headers="">Tidak Ada Data</td>
                 </tr>
                 <?php endif; ?>
               </tbody>
             </table>
         </div>
     </div>
</div>
</body>
</html> 
