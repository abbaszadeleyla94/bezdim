<?php
 include 'header.php';
 include 'sidebar.php'; 

if (isset($_SESSION['admin_kadi'])) {       //  !  goturuldu duzeldi
    header('Location:login.php');
}
 ?>
     
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Autizm.az</h1>
                        <h1 class="page-subhead-line">Autizm Defektoloji və Psixoloji Yardım Mərkəzi </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            This is a free responsive admin under cc3.0 license, so you can use it for personal and commercial use.
                          <br />
                            Enjoy this admin and for more please keep looking <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
                        </div>
                    </div>
                </div> -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



<?php include 'footer.php'; ?>