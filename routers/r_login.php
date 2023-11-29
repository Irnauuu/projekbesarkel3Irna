<?php
include_once '../controllers/C_Login.php';

$login = new C_Login();

    if ($_GET['aksi'] == 'register') {

        $nip = $_POST['nip'];
        $nama  = $_POST['nama'];
        $mata_pelajaran  = $_POST['mata_pelajaran'];
        $pass  = $_POST['password'];
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $role  = $_POST['role'];

        $login->register($id=0, $nama, $email, $pass, $role);

    }elseif ($_GET['aksi'] == 'login') {
        $email  = $_POST['email'];
        $pass  = $_POST['password'];

        // memanggil method login
        $login->login($email, $pass);
    }


?>