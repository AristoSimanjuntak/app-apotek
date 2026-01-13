<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Apotek Sambu</title>
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/images/logo/favicon_2.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/extensions/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/datepicker/dist/css/bootstrap-datepicker3.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/pages/data-list-view.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/pages/app-todo.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/plugins/extensions/drag-and-drop.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/aos/aos.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/sweetjs/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin//assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .scroll-top {
            position: fixed;
            bottom: 0;
            right: 2%;
            z-index: 100;
            background: #337ab7;
            font-size: 12px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .scroll-top a:link,
        .scroll-top a:visited {
            color: #222;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .scrolly_table {
            white-space: nowrap;
            overflow-x: auto;

        }

        .fixed.freeze {
            z-index: 10;
            position: relative;
        }

        .fixed.freeze_vertical {
            z-index: 5;
            position: relative;
        }

        .fixed.freeze_horizontal {
            z-index: 9;
            position: relative;
        }


        .fixed-column {
            position: sticky;
            left: 0;
            z-index: 2;
            background-color: #253C7A;
            /* Ensure text color is readable */
        }

        /* To handle multiple fixed columns, adjust the left offset accordingly */
        .fixed-column+.fixed-column {
            left: 42px;
            /* Adjust this value as needed */
        }

        .fixed-column+.fixed-column+.fixed-column {
            left: 217px;
            /* Adjust this value as needed */
        }

        .fixed-column+.fixed-column+.fixed-column+.fixed-column {
            left: 427px;
            /* Adjust this value as needed */
        }



        .waviy {
            position: relative;

            font-size: 60px;
        }

        .waviy span {
            /* font-family: 'Alfa Slab One', cursive; */
            position: relative;
            display: inline-block;
            color: black;
            text-transform: uppercase;
            animation: waviy 1s infinite;
            /* animation-delay: calc(.3000s * var(--i)); */
            animation-delay: (2s);

        }

        @keyframes waviy {

            0%,
            40%,
            100% {
                transform: translateY(0)
            }

            20% {
                transform: translateY(-11px)
            }
        }

        .custom4 {
            /* margin-right: 36px; */
            width: 400%;
        }

        .marginBottom-0 {
            margin-bottom: 0;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns" onload="startTime()">
    <!-- <body class="horizontal-layout horizontal-menu dark-layout 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns" data-layout="dark-layout"> -->

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center" data-aos="fade-down">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="<?= base_url(); ?>index.php/C_dashboard">
                        <strong> Apotek Sambu</strong>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <h5>
                                <?= date('l, d F Y') ?> - <span id="clock">00:00:00</span>
                            </h5>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <!-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <?php $this->load->view('template/V_isi_notif'); ?>
                        </li> -->
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">
                                        <?= str_replace('2', '', $username); ?>
                                    </span>
                                </div>
                                <span><img class="round" src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/images/portrait/small/user_view.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('assets/admin-vuexy-v4.1/vuexy-html-admin//html/ltr/horizontal-menu-template/index.html') ?>"><i class="feather icon-box"></i> Template</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/C_login/logout') ?>"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin//html/ltr/horizontal-menu-template/index.html">
                            <!-- <div class="brand-logo"></div> -->
                            <h2 class="brand-text mb-0">Aptoek Sambu</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container" data-aos="">
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li <?php if (isset($Titel)) {
                            if ('Home' == trim($Titel))
                                echo 'class="active"';
                        } ?>><a href="<?= base_url(); ?>index.php/C_dashboard"><i class="feather icon-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
                    </li>


                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Menu Level 1">
                            Master
                        </a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="<?= base_url(); ?>index.php/master/C_obat" data-toggle="dropdown" data-i18n="Menu Level 2">
                                    Obat
                                </a></li>


                            <li data-menu=""><a class="dropdown-item" href="<?= base_url(); ?>index.php/master/C_supplier" data-toggle="dropdown" data-i18n="Menu Level 2">
                                    supplier
                                </a></li>

                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Menu Level 1">
                            Transaksi
                        </a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="<?= base_url(); ?>index.php/master/C_transaksi" data-toggle="dropdown" data-i18n="Menu Level 2">
                                    pembelian
                                </a></li>
                            <li data-menu=""><a class="dropdown-item" href="<?= base_url(); ?>index.php/master/C_transaksi" data-toggle="dropdown" data-i18n="Menu Level 2">
                                    laporan
                                </a></li>


                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">