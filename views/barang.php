<?php
$halaman ="barang";
session_start();
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

include_once '../controllers/c_barang.php';

$barang= new c_barang();
?>


<!-- Begin Page Content -->
<div class="container-fluid">



<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

        <a href="tambah_barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary
        shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Barang</a>

</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    

                    <tr>
                        <td>No</td>
                        <td>Nip</td>
                        <td>Nama</td>
                        <td>Mata Pelajaran</td>
                        <td>Action</td>
                    </tr>
                    
</head>
<tbody>

                                    <?php
                                    
                                    $nomor = 1;
                                    foreach($barang->tampil() as $b){
 
                                    

                                  ?>
                                  <tr>
                                        <td><?= $nomor++ ?></td>
                                        <td><?php echo $b->nama ?></td>
                                        <td><?= $b->mata_pelajaran ?></td>
                                        <td><?= $b->photo ?></td>
                                        <td><a href="edit_barang.php?nip=<?= $b->nip ?>"><button 
                                        type="button" class="btn btn-round btn-primary">Edit</button></a>

                                        <a onlick="return confirm('Apakah yakin data akan di hapus')"
                                        href="../routers/r_barang.php?nip= <?= $b->nomor ?>& aksi=hapus"><button type="button" name="hapus" class="btn btn-round btn-danger">hapus</button></a></td>
                                      </tr>

                                    <?php
                                    }
                                    ?>

                                     
                 </tbody>               
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include_once 'template/footer.php';
?>