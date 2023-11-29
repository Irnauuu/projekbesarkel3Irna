 <?php
 //kita menggunakan konsep modular -> memecah bagian besar project menjadi bagian-bagian kecil atau sebaliknya

//  include
// require
// require_once
session_start();
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php'; 


 ?>
 
 <body>
    <h1> SELAMAT DATANG SEBAGAI ADMIN </h1>
</BODY>


              
           
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    include_once 'template/footer.php';
    ?>

   