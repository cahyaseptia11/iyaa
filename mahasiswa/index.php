<!DOCTYPE html>
<html lang="en">

<?php 
include '../template/head.php'
?>


<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
      <?php 
      include '../template/sidebar.php'
      ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->    
        <!-- <h1 class="h3 mb-4 text-gray-800">DATA MAHASISWA</h1>    -->
        <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tampil Data Mahasiswa</h3><br>
          <p></p>
          <a href="input_Mahasiswa.php"><button type="submit" class="btn btn-primary">Tambah Mahasiswa</button></a>      
        </div>       
        <?php 
        include '../db.php';
        $database = new db();
        ?>


<table class="table table-hover">
 <thead>
	<tr>
		<th>NO</th>
		<th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jurusan</th>        
        <th>AKSI</th>
    </tr>
</thead>
<tbody>
        <?php $no=1; ?>
            <?php foreach ($database->get_show() as $show) { 
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $show['nim'] ?></td>
                    <td><?php echo $show['nama'] ?></td>
                    <td><?php echo $show['alamat'] ?></td>
                    <td><?php echo $show['jurusan'] ?></td>                    
                        <a href="" class="btn btn-warning"> EDIT </a>
                        <a href="" class="btn btn-danger" onclick="return confirm(' Yakin Ingin Hapus?');"> DELETE </a>
                    </td>
                </tr>
            <?php
         }
          ?>
    </tbody>
</table>  
      </div>                 
            <!-- End of Main Content -->                    
        <!-- End of Content Wrapper -->
        <div class="content-wrapper">       

  </div>


    </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php 
    include '../template/script.php'
    ?>   

</body>


</html>


