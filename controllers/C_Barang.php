<?php

	include_once 'C_koneksi.php';

	class C_Barang{
		//public $id;

		public function tambah($nip, $nama, $mata_pelajaran ){
		$conn = new C_koneksi();

		$sql = "INSERT INTO tb_pegawai VALUES ('$nip', '$nama', '$mata_pelajaran')";
				$query =  mysqli_query($conn->conn(), $sql); // ->true / false

                
                    if ($query) {
                        echo "data barang berhasil ditambahkan";
                   }else{
                    echo "data barang gagal ditambahkan";

                }
	}
			public function tampil(){
				$conn = new C_koneksi();
				$sql = "SELECT * FROM tb_pegawai ORDER BY nomor DESC";
				$query =  mysqli_query($conn->conn(), $sql);
                while ($q = mysqli_fetch_object($query)){
                     $hasil[]= $q;
                }
	
         return  $hasil;

            }
			public function edit(){
				$conn = new C_koneksi();
                $sql =  "SELECT * FROM tb_pegawai WHERE id = $id";  	
				$query =  mysqli_query($conn->conn(), $sql);
                while ($q = mysqli_fetch_object($query)){
                    $hasil[]= $q;
               }
   
        return  $hasil;

	}
			public function update(){
				$conn = new C_koneksi();
				$sql = "UPDATE tb_pegawai SET nama = '$nama', mata_pelajaran='$mata_pelajaran' WHERE nip = '$nip' ";
				$query =  mysqli_query($conn->conn(), $sql);

                if ($query) {
                    echo "data berhasil diubah";
               }else{
                echo "data tidak berhasil diubah";

            }
	}
			public function delete($id){
                $conn = new C_koneksi();
                $sql = "DELETE FROM tb_pegawai WHERE nomor=$nip";
				mysqli_query($conn->conn(), $sql);
               


                header("Location:../views/barang.php");
	}
	
    }

?>