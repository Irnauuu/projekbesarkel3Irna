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
<h1 class="h3 mb-2 text-gray-800">Table Data Pegawai</h1>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="tambah_barang.php" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Mata Pelajaran</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $conn->query("SELECT * FROM db_pegawai");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td align="center">
							<img src="foto/<?php echo $data['foto']; ?>" width="70px" />
						</td>
						<td>
							<?php echo $data['nip']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['mata_pelajaran']; ?>
						</td>

						<td>
							<a href="?page=view-pegawai&kode=<?php echo $data['nip']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-pegawai&kode=<?php echo $data['nip']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pegawai&kode=<?php echo $data['nip']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.container -->


<?php
include_once 'template/footer.php';
?>