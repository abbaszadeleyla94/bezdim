<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
     <?php   include('netting/baglan.php');   ?>
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Parametrler</h1>
                        <h1 class="page-subhead-line">Buradan parametrləri idarə etmək olar </h1>
                    </div>
                </div>


                <form action="netting/islem.php" method="POST">
                    <div align="center" class="form-group col-md-6">
                                        <label>Saytın başlığı</label>
                                        <input class="form-control" type="text" name="ayar_title" value="<?php echo $row['ayar_title']; ?>">    
                    </div>

                    <div align="center" class="form-group col-md-6">
                                        <label>Saytın açıqlaması</label>
                                        <input class="form-control" type="text" name="ayar_description" value="<?php echo $row['ayar_description']; ?>">   
                    </div>

                    <div align="center" class="form-group col-md-6">
                                        <label>Telefon nömrəsi</label>
                                        <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $row['ayar_telefon']; ?>">              
                    </div>

                    <div align="center" class="form-group col-md-6">
                                        <label>Açar kəlimələr</label>
                                        <input class="form-control" type="text" name="ayar_keywords" value="<?php echo $row['ayar_keywords']; ?>">              
                    </div>
                    <div align="center" class="form-group col-md-6">
                                        <label>Facebook</label>
                                        <input class="form-control" type="text" name="ayar_facebook" value="<?php echo $row['ayar_facebook']; ?>">              
                    </div>
                    <div align="center" class="form-group col-md-6">
                                        <label>Twitter</label>
                                        <input class="form-control" type="text" name="ayar_twitter" value="<?php echo $row['ayar_twitter']; ?>">              
                    </div>
                    <div align="center" class="form-group col-md-6">
                                        <label>Footerdeki yazini deismek</label>
                                        <input class="form-control" type="text" name="ayar_footer" value="<?php echo $row['ayar_footer']; ?>">              
                    </div>
                    <div align="center" class="form-group col-md-6">
                                        <label>Adress</label>
                                        <input class="form-control" type="text" name="ayar_adres" value="<?php echo $row['ayar_adres']; ?>">              
                    </div>
                    <div align="center" class="form-group col-md-6">
                                        <label>Mail</label>
                                        <input class="form-control" type="text" name="ayar_mail" value="<?php echo $row['ayar_mail']; ?>">              
                    </div>
                    <div align="center" class="form-group col-md-6">
                                        <label>Fax</label>
                                        <input class="form-control" type="text" name="ayar_fax" value="<?php echo $row['ayar_fax']; ?>">              
                    </div>
                    <div align="center" class="form-group col-md-6">
                                        <label>Logo</label>
                                        <input class="form-control" type="text" name="ayar_logo" value="<?php echo $row['ayar_logo']; ?>">              
                    </div>

                    <div align="center" class="form-group col-md-12">
                                      
                                        <input class="btn btn-success" type="submit" name="ayarkaydet" value="saxla">              
                    </div>
               </form>



            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



<?php include 'footer.php'; ?>