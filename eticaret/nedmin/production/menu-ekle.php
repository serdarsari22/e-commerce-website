<?php 
include 'header.php';



 ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menü Ekleme <small>,
                        
                       

                       
                      

                    </small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />


                    <form action='../netting/islem.php' method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Ad<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_ad" placeholder="Menü Adını Giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <!-- Ck Editör Başlangıç -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="    first-name">Menü Detay <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <textarea  class="ckeditor" id="editor1" name="menu_detay"></textarea>
                        </div>
                      </div>

                    <script type="text/javascript">

                       CKEDITOR.replace( 'editor1',

                       {

                        filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                        filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                        forcePasteAsPlainText: true

                      } 

                      );

                    </script>
                    <!-- Ck Editör Bitiş -->

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Url<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_url"   placeholder="Url giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Sıra<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_sira"  required="required" placeholder="sıra giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>





                    

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            
                          <button type="submit" name="menukaydet" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </div>
        <!-- /page content -->

       <?php 
       include 'footer.php';
        ?>