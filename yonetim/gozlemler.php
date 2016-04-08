  <!--include header php it is contains connection string-->
 <?php require_once("header.php") ?>

<!-- BEGIN CONTENT -->

            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                   
                    
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Gözlemler
                        <small>Gözlem Listesi</small>
                    </h3>

<div id="dialog" style="display: none">
<div id="dvMap" style="height: 380px; width: 580px;">
</div>
</div>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Gözlem Listesi</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> Kategori </th>
                                                <th> Açıklama </th>
                                                <th> Oylama </th>
                                                <th> Harita </th>
                                                <th> Durum </th>
											    <th> Düzenle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
$query =  $db->stmt_init();
$query = $db->query('select * from compliments order by id desc');

//print all complains
while($obj = $query->fetch_object()){ 
				$status = "";
				if($obj->status == "Onaylanmamış"){
					$status .= "<span style='color:red;'>";
					$status .= $obj->status;
					$status .= "</span>";
					}
					else{
						$status .= "<span style='color:green;'>";
					$status .= $obj->status;
					$status .= "</span>";
					}
            echo "<tr><td>".$obj->topic."</td><td>".$obj->desc."</td><td>".$obj->vote."</td><td><a href='#' data-lat='".$obj->coorx."' data-lng='".$obj->coory."' class='btnShow'>Haritada Göster</a></td><td>".$status."</td><td><a href='gozlemonay.php?id=".$obj->id."' class='btn btn-outline sbold green-haze' onclick=\"if (!confirm('Emin misiniz?')) return false;\">ÇÖZÜLDÜ OLARAK İŞARETLE</a></td></tr>";
        } 	
										?>
                                           
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                            
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
        </div>
        <!-- END CONTAINER -->
    
	
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
        <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">	
jQuery(function($){
	 
    $(".btnShow").click(function () {
		var lat = $(this).data("lat");
		var lng = $(this).data("lng");
        $("#dialog").dialog({
            modal: true,
            title: "Haritada Gösterim",
            width: 600,
            hright: 450,
            buttons: {
                Close: function () {
                    $(this).dialog('close');
                }
            },
            open: function () {
                var mapOptions = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: 18,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
				
                var map = new google.maps.Map($("#dvMap")[0], mapOptions);
				var marker = new google.maps.Marker({
		position: new google.maps.LatLng(lat, lng),
			map: map,
    
  });
            }
        });
    });
});
</script>    
	
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
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
	
        <script type="text/javascript">
		var TableDatatablesButtons = function () {

    var initTable1 = function () {
        var table = $('#sample_1');

        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "Gösterilebilecek veri yok",
                "info": "Gosterilen _START_ - _END_ arası, toplam _TOTAL_ girdi",
                "infoEmpty": "Kayıt bulunamadı",
                "infoFiltered": "(filtered1 icin _MAX_ toplam girdi)",
                "lengthMenu": "_MENU_ girdi",
                "search": "Ara:",
                "zeroRecords": "Kayıt bulunamadı"
            },

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},


            buttons: [
                { extend: 'print', className: 'btn dark btn-outline' },
                { extend: 'copy', className: 'btn red btn-outline' },
                { extend: 'pdf', className: 'btn green btn-outline' },
                
                { extend: 'csv', className: 'btn purple btn-outline ' },
                { extend: 'colvis', className: 'btn dark btn-outline', text: 'Sütunlar'}
            ],

            // setup responsive extension: http://datatables.net/extensions/responsive/
            responsive: true,

            "order": [
                [0, 'asc']
            ],
            
            "lengthMenu": [
                [5, 10, 15, 20, -1],
                [5, 10, 15, 20, "Hepsi"] // change per page values here
            ],
            // set the initial value
            "pageLength": 20,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });
    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            initTable1();
            
        }

    };

}();

jQuery(document).ready(function() {
    TableDatatablesButtons.init();
});
		</script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
		
		
    </body>

</html>