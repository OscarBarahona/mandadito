<?php header("Access-Control-Allow-Origin: *"); 

$query = new Querys();
$menu = new Menu();
if (!Yii::app()->user->isGuest) {    
  $claseMain= "nav-md";
  $estadoLogueo= Yii::app()->user->estadoLogueo;
  Yii::app()->user->estadoLogueo=2;
  $userCode = Yii::app()->user->userCode;
        $permiso = 1;//Yii::app()->user->permiso;
    }
    ?>
    <?php
    if (!Yii::app()->user->isGuest) {?>
        <!DOCTYPE html>
        <html lang="es">


        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Favicon icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/favicon.png">
            <title><?php echo CHtml::encode($this->pageTitle); ?></title>
            <!-- Custom CSS -->
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.min.css" rel="stylesheet">
            <script src='<?php echo Yii::app()->request->baseUrl; ?>/js/sweet-alert.js'></script>
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/sweet-alert.css" rel="stylesheet"/>

            <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>

        </head>

        <body cz-shortcut-listen="true" data-theme="dark">

            <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Main wrapper - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <div id="main-wrapper" data-navbarbg="skin3" >
                <!-- ============================================================== -->
                <!-- Topbar header - style you can find in pages.scss -->
                <!-- ============================================================== -->
                <header class="topbar navbar-dark" data-navbarbg="skin3" data-logobg="skin3">
                    <nav class="navbar top-navbar navbar-expand-md navbar-dark" data-logobg="skin3">
                        <div class="navbar-header" data-logobg="skin3">
                            <!-- This is for the sidebar toggle which is visible on mobile only -->
                            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                            <!-- ============================================================== -->
                            <!-- Logo -->
                            <!-- ============================================================== -->
                            <a class="navbar-brand" href="index.html">
                                <!-- Logo icon -->
                                <b class="logo-icon">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                    <!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                                    <!-- Light Logo icon -->
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                   <!-- dark Logo text -->
                                   <!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                                   <!-- Light Logo text -->
                                   <h1  class="light-logo" alt="homepage">Delivery</h1>    
                                   <!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> -->
                               </span>
                           </a>
                           <!-- ============================================================== -->
                           <!-- End Logo -->
                           <!-- ============================================================== -->
                           <!-- ============================================================== -->
                           <!-- Toggle which is visible on mobile only -->
                           <!-- ============================================================== -->
                           <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                       </div>
                       <!-- ============================================================== -->
                       <!-- End Logo -->
                       <!-- ============================================================== -->
                       <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin3">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                    <span class="with-arrow"><span class="bg-primary"></span></span>
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="drop-title bg-success text-white">
                                                <h4 class="mb-0 mt-1">4 New</h4>
                                                <span class="font-light">Notifications</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-center notifications">
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item">
                                                    <span class="btn btn-success btn-circle"><i class="ti-user"></i></span>
                                                    <div class="mail-contnet">
                                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- ============================================================== -->
                                <!-- End Comment -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- Messages -->
                                <!-- ============================================================== -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>

                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                        <span class="with-arrow"><span class="bg-danger"></span></span>
                                        <ul class="list-style-none">
                                            <li>
                                                <div class="drop-title text-white bg-danger">
                                                    <h4 class="mb-0 mt-1">5 New</h4>
                                                    <span class="font-light">Messages</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-center message-body">
                                                   c<!-- Message -->
                                                   <a href="javascript:void(0)" class="message-item">
                                                    <span class="user-img"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                    <div class="mail-contnet">
                                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="nav-link text-center link text-dark" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- ============================================================== -->
                                <!-- End Messages -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- User profile and search -->
                                <!-- ============================================================== -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/users/d2.jpg" alt="user" class="rounded-circle" width="31"></a>
                                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                        <span class="with-arrow"><span class="bg-primary"></span></span>
                                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                            <div class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                                            <div class="ml-2">
                                                <h4 class="mb-0">Oscar Barahona</h4>
                                            </div>
                                        </div>
                                        <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a> -->
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Mensajes</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Configuración de cuenta</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item cerrarSession" href="javascript:void(0)"><i class="fa fa-power-off mr-1 ml-1"></i> Cerrar sesión</a>
                                        <div class="dropdown-divider"></div>
                                        <!-- <div class="pl-4 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div> -->
                                    </div>
                                </li>
                                <!-- ============================================================== -->
                                <!-- User profile and search -->
                                <!-- ============================================================== -->
                            </ul>
                        </div>
                    </nav>
                </header>
                <!-- ============================================================== -->
                <!-- End Topbar header -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <aside class="left-sidebar" data-sidebarbg="skin3">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <!-- User Profile-->
                                <li>
                                    <!-- User Profile-->
                                    <div class="user-profile d-flex no-block dropdown mt-3">
                                        <div class="user-pic"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/users/d2.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                        <div class="user-content hide-menu ml-2">
                                            <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <h5 class="mb-0 user-name font-medium">User</h5>    
                                            </a>

                                        </div>
                                    </div>
                                    <!-- End User Profile-->
                                </li>
                                <!-- User Profile-->

                                <?php
                                $classAct = "";
                                $hrefDir="";
                                $modelsA = $menu->menuPrincipal(0);
                                foreach ($modelsA as $model2A): 
                                  if ($model2A["submenunum"] >0) {
                                    $classAct="sidebar-link has-arrow waves-effect waves-dark";
                                    $hrefDir = "#";
                                }else{
                                    $classAct="sidebar-link waves-effect waves-dark sidebar-link";
                                    $hrefDir = CController::createUrl($model2A['controlador'] . '/' . $model2A['accion'])."?identify=".utf8_encode($model2A['alias']) ;

                                }

                                ?>
                                <li class="sidebar-item"> 
                                    <a class="<?= $classAct; ?>" aria-expanded="false"><i class="<?= $model2A['icono'];?>" aria-hidden="true"></i>
                                        <span class="hide-menu"><?=  $model2A['nombre'];?> </span></a>
                                        <?php ?>
                                        <?php if($model2A["submenunum"] >0){
                                            $modelsB = $menu->menuPrincipal($model2A["idmenu"]);
                                            foreach ($modelsB as $model2B): 

                                            echo "hola ".$model2B['accion'];
                                                if ($model2B["submenunum"] >0) {
                                                 $classAct="sidebar-link has-arrow waves-effect waves-dark";
                                                 $hrefDir = "#";
                                             }else{
                                                $classAct="sidebar-link waves-effect waves-dark sidebar-link";
                                                $hrefDir = CController::createUrl($model2B['controlador'] . '/' . $model2B['accion'])."?identify=".utf8_encode($model2B['alias']) ;

                                            }
                                            ?>
                                            <ul aria-expanded="false" class="collapse  first-level">
                                                <li class="sidebar-item"><a href="<?=$hrefDir;?>" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> <?=  $model2B['nombre'];?> </span></a></li>

                                            </ul>
                                        <?php endforeach;
                                    }?>
                                </li>


                                <?php     
                            endforeach;

                            ?>
                            <li class="sidebar-item"> 
                                <a class="sidebar-link waves-effect waves-dark sidebar-link cerrarSession" 
                                href="#" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Cerrar sesión</span></a></>
                                <li class="p-15 mt-2"><a href="javascript:void(0)" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><span class="hide-menu ml-1"><?php echo CHtml::encode($this->pageTitle); ?></span> </a></li>

                            </ul>
                        </nav>

                    </div>
                </aside>
                <div class="page-wrapper">
                <?php }?>
                <?php echo $content; ?>
                <footer class="footer text-right" >
                    © 2020 Delivery. ALL Rights Reserved.
                </footer>
                <?php  if (!Yii::app()->user->isGuest) {?>
                </div>
            </div>

            <div class="chat-windows"></div>
            <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->
            <!-- <script data-cfasync="false" src="<?php echo Yii::app()->request->baseUrl; ?>/../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- apps -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.init.light-sidebar.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app-style-switcher.js"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/extra-libs/sparkline/sparkline.js"></script>
            <!--Wave Effects -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/waves.js"></script>
            <!--Menu sidebar -->
            <!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/sidebarmenu.js"></script> -->
            <!--Custom JavaScript -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/feather.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.min.js"></script>
            <!--This page JavaScript -->
            <!--chartis chart-->
            <!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/chartist/dist/chartist.min.js"></script> -->
            <!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> -->
            <!--c3 charts -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/extra-libs/c3/d3.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/extra-libs/c3/c3.min.js"></script>
            <!--chartjs -->
            <!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/chart.js/dist/Chart.min.js"></script> -->
            <!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/dashboards/dashboard1.js"></script> -->

            <script>
             $('.cerrarSession').on("click",function(){
              swal({
                title: "Finalizar Sesion",
                text: "Desea cerrar la sesion",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si quiero salir',
                cancelButtonText: 'Ver mas tarde',
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function (isConfirm) {
                cerrarSession();
            });
          });
             function cerrarSession(){
                $.ajax({
                    url: '<?php echo CController::createUrl('site/logout'); ?>',
                    type: 'GET',
                    dataType: 'html',
                    async: false,
                    success: function (resp) {   

                        location.reload();

                    }

                });

            }
        </script>
    </body>
    </html>

    <?php }?>