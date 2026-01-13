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
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/images/pages/login.png" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h1 class="text-primary mb-0"><strong>Apotek SAMBU</strong></h1>
                                            </div>
                                        </div>
                                        <p class="px-2">Sign in to start Aplication</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form class="user" action='<?= site_url('C_login/index'); ?>' method='post'>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="username">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                                    </div>
                                                    <button type='submit' class="btn btn-primary btn-user btn-block">
                                                        Sign In
                                                    </button>
                                                    <br>
                                                    <div class="text-center">
                                                        <a class="small" href="<?= site_url('C_login/register') ?>">Register</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                                <div class="divider-text">&copy; Training Programmer 2024 </div>
                                                <br>
                                                <br>
                                                <a href="https://sambugroup.com/" target="_blank">www.sambugroup.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/core/app.js"></script>
    <script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>