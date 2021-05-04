<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Elegant admin lite design, Elegant admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
          content="Elegant Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Agendar Citas</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/elegant-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo constant('URL')?>public/assets/images/logoufps.png">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo constant('URL')?>public/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="<?php echo constant('URL')?>public/assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo constant('URL')?>public/assets/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo constant('URL')?>public/assets/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elegant admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark" style="background-color: #dd4b39;">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="admin.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?php echo constant('URL')?>public/assets/images/logo.png" class="img-fluid" />
                        <!-- Light Logo icon -->
                    </b>
                    <!--End Logo icon -->
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="<?php echo constant('URL')?>public/assets/images/Logout.png" alt="user" class="img-fluid" width="30"
                                style="background-color: white; border-radius: 10px;"></a>
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
    <aside class="left-sidebar" style="background-color: #dd4b39;">
        <div class="d-flex no-block nav-text-box align-items-center">
            <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"
               style="color: white;"><i class="ti-menu"></i></a>
            <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li> <a class="waves-effect waves-dark" href="admin.html" aria-expanded="false"
                            style="color: white;"><i class="fa fa-users"></i><span
                                class="hide-menu">Ingenieros</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="admin-servicio.html" aria-expanded="false"
                            style="color: white;"><i class="fa fa-check"></i><span
                                class="hide-menu">Servico</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="admin-vinculo.html" aria-expanded="false"
                            style="color: white;"><i class="fa fa-link"></i><span
                                class="hide-menu">Vincular</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">INGENIEROS</h4>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- News -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h5 class="card-title">AGREGAR/ELIMINAR INGENIERO</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Espacio para el el formulario ¡aqui! -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2020 Copyright: Universidad Francisco de Paula Santander</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo constant('URL')?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="<?php echo constant('URL')?>public/assets/node_modules/popper/popper.min.js"></script>
<script src="<?php echo constant('URL')?>public/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo constant('URL')?>public/assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?php echo constant('URL')?>public/assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo constant('URL')?>public/assets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo constant('URL')?>public/assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="<?php echo constant('URL')?>public/assets/node_modules/raphael/raphael-min.js"></script>
<script src="<?php echo constant('URL')?>public/assets/node_modules/morrisjs/morris.min.js"></script>
<script src="<?php echo constant('URL')?>public/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--c3 JavaScript -->
<script src="<?php echo constant('URL')?>public/assets/node_modules/d3/d3.min.js"></script>
<script src="<?php echo constant('URL')?>public/assets/node_modules/c3-master/c3.min.js"></script>
<!-- Chart JS -->
<script src="<?php echo constant('URL')?>public/assets/js/dashboard1.js"></script>
</body>

</html>