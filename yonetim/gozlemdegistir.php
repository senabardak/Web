 <!--include header php it is contains connection string-->
 <?php require_once("header.php") ?>
<?php 
$id = $_GET["id"];
$query =  $db->stmt_init();
$query = $db->query("select * from compliments where id = '".$id."'");
//get single observer content
while($obj = $query->fetch_object()){ 
				$konu = $obj->topic;
				$status = $obj->status;
				$aciklama = $obj->desc;
				$tarihzaman = $obj->date;
				$datetime = new DateTime($tarihzaman);

                $tarih = $datetime->format('Y-m-d');
                $zaman = $datetime->format('H:i:s');
				$adres = $obj->address;
				$coorx = $obj->coorx;
				$coory = $obj->coory;
        } 		
?>
<!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    
                    
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Gözlemler
                        <small>Gözlem Değiştir</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                                                  <div class="portlet light bg-inverse form-fit">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-user font-blue-hoki"></i>
                                                    <span class="caption-subject font-blue-hoki bold uppercase"><?php echo $konu ?></span>
                                                    <span class="caption-helper"><?php echo $status ?></span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="gozlemdegisiklikkayit.php" method="get" class="form-horizontal form-bordered form-row-stripped">
												<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>" />
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Konu</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="konu" value="<?php echo $konu ?>" class="form-control" />
                                                                <span class="help-block"> konuyu giriniz </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Açıklama</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="aciklama" value="<?php echo $aciklama ?>" class="form-control" />
                                                                <span class="help-block"> açıklaması buraya gelecek </span>
                                                            </div>
                                                        </div>
														
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Tarih</label>
                                                            <div class="col-md-9">
                                                                <input type="date"  name="tarih" value="<?php echo $tarih ?>" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Zamanı</label>
                                                            <div class="col-md-9">
                                                                <input type="time"  name="zaman" value="<?php echo $zaman ?>" class="form-control"> </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Adres</label>
                                                            <div class="col-md-9">
                                                                <input type="text"  name="adres" value="<?php echo $adres ?>" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Latitude</label>
                                                            <div class="col-md-9">
                                                                <input type="text"  name="latitude" value="<?php echo $coorx ?>"  class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Longitude</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="longitude" value="<?php echo $coory ?>"  class="form-control"> </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">
                                                                    <i class="fa fa-check"></i> Kaydet</button>
                                                                <button type="button" class="btn default">Vazgeç</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
        </div>
        <!-- END CONTAINER -->
      
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/form-samples.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>