 <!--include header php it is contains connection string-->
 <?php require_once("header.php") ?> 
 
 <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                   
                    
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Dashboard
                        <small>Istatistikler</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="16">0</span>
                                    </div>
                                    <div class="desc"> Toplam Gözlem </div>
                                </div>
                                <a class="more" href="javascript:;"> Daha Fazla
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat red">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="14">0</span> </div>
                                    <div class="desc"> Onaylanmamış </div>
                                </div>
                                <a class="more" href="javascript:;"> Daha Fazla
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="2">0</span>
                                    </div>
                                    <div class="desc"> Onaylanmış </div>
                                </div>
                                <a class="more" href="javascript:;"> Daha Fazla
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> 
                                        <span data-counter="counterup" data-value="89"></span> </div>
                                    <div class="desc"> Kullanıcı </div>
                                </div>
                                <a class="more" href="javascript:;"> Daha Fazla
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                     <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-blue"></i>
                                        <span class="caption-subject font-blue bold uppercase">Son İşlemler</span>
                                    </div>
                                  
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                                        <ul class="feeds">
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> You have 4 pending tasks.
                                                                <span class="label label-sm label-warning "> Take action
                                                                    <i class="fa fa-share"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bar-chart-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 20 mins </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 24 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New order received with
                                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 30 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 24 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                                <span class="label label-sm label-default "> Overdue </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 2 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-briefcase"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 20 mins </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> You have 4 pending tasks.
                                                                <span class="label label-sm label-warning "> Take action
                                                                    <i class="fa fa-share"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-danger">
                                                                    <i class="fa fa-bar-chart-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 20 mins </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 24 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New order received with
                                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 30 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 24 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-warning">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                                <span class="label label-sm label-default "> Overdue </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 2 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-briefcase"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 20 mins </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light tasks-widget bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-green-haze hide"></i>
                                        <span class="caption-subject font-green bold uppercase">Gözlemler</span>
                                        <span class="caption-helper">gözlem incelemesi...</span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <div class="task-content">
                                        <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                                            <!-- START TASK LIST -->
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> Present 2013 Year IPO Statistics at Board Meeting </span>
                                                        <span class="label label-sm label-success">Company</span>
                                                        <span class="task-bell">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> Hold An Interview for Marketing Manager Position </span>
                                                        <span class="label label-sm label-danger">Marketing</span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> AirAsia Intranet System Project Internal Meeting </span>
                                                        <span class="label label-sm label-success">AirAsia</span>
                                                        <span class="task-bell">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> Technical Management Meeting </span>
                                                        <span class="label label-sm label-warning">Company</span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> Kick-off Company CRM Mobile App Development </span>
                                                        <span class="label label-sm label-info">Internal Products</span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> Prepare Commercial Offer For SmartVision Website Rewamp </span>
                                                        <span class="label label-sm label-danger">SmartVision</span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> Sign-Off The Comercial Agreement With AutoSmart </span>
                                                        <span class="label label-sm label-default">AutoSmart</span>
                                                        <span class="task-bell">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> Company Staff Meeting </span>
                                                        <span class="label label-sm label-success">Cruise</span>
                                                        <span class="task-bell">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="last-line">
                                                    <div class="task-checkbox">
                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> KeenThemes Investment Discussion </span>
                                                        <span class="label label-sm label-warning">KeenThemes </span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- END START TASK LIST -->
                                        </div>
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
      
        <script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>