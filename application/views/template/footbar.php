</div>
</div>
</div>
<!-- END: Content-->

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-dark navbar-shadow">
    <p class="clearfix blue-grey lighten-2 mb-0">
        <span class="float-md-left d-block d-md-inline-block mt-25"><strong>&copy;
                <?php $fromYear = 2021;
                $thisYear = (int) date('Y');
                echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : ''); ?> <a href="https://sambugroup.com/" target="_blank">PT Pulau Sambu (Guntung)</a> All rights reserved.
            </strong></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->

<!-- BEGIN: Vendor JS-->
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<!-- <script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/charts/apexcharts.min.js"></script> -->
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/extensions/dragula.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/core/app-menu.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/core/app.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script> -->
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/datatables/datatable.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/modal/components-modal.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/forms/select/form-select2.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/ui/data-list-view.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/pages/app-todo.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/extensions/drag-drop.js"></script>
<script src="<?= base_url(); ?>assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/extensions/toastr.min.js"></script>
<script src="<?= base_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/extensions/toastr.js"></script>
<script src="<?= base_url(); ?>assets/mask/dist/jquery.mask.min.js"></script>
<script src="<?= base_url(); ?>assets/js/New_AddRow.js"></script>
<script src="<?= base_url() ?>assets/aosjs/aosjs.js"></script>
<script src='<?= base_url('assets/js/Freeze.js') ?>'></script>

<script src="<?= base_url(); ?>assets/jquery-freeze-table/freeze-table.min.js"></script>
<!-- END: Page JS-->

<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            todayBtn: "linked",
            todayHighlight: 'TRUE',
            autoclose: true,
            orientation: "bottom",
        });

        $('.maskdate').mask("00-00-0000", {
            placeholder: "dd-mm-yyyy"
        });
    });
</script>


<script type="text/javascript">
    // tipe 1 : success
    // tipe 2 : error

    function notif_berhasil_simpan() {
        Swal.fire({
            type: 'success',
            title: 'Data Berhasil disimpan',
            showConfirmButton: false,
            timer: 2000,
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
        })
    }

    function notif_gagal_simpan() {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Gagal Menyimpan data!',
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
        })
    }

    function notif_flash_custom(tipe, pesan) {
        Swal.fire({
            type: tipe,
            title: pesan,
            showConfirmButton: false,
            timer: 2000,
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
        })
    }

    function notif_btnconfirm_custom(tipe, pesan) {
        Swal.fire({
            type: tipe,
            title: pesan,
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
        })
    }

    function notifFormInfo(code, version) {
        $.ajax({
            type: "post",
            url: `<?= base_url(); ?>index.php/form_input/C_forminput/getFormInfo/${code}/${version}`,
            data: {
                code,
                version
            },
            dataType: "json",
            success: function(info) {
                const formket = info.data[0].formket;

                switch (formket) {
                    case 'In-Progress':
                        toastr.info('Laporan ini masih dalam tahap Development Oleh Team ITD Programmer !!!', '', {
                            "closeButton": true,
                            "timeOut": 0,
                        });
                        break;
                    case 'Modified':
                        toastr.info('Laporan ini masih dalam tahap Revisi Oleh Team ITD Programmer !!!', '', {
                            "closeButton": true,
                            "timeOut": 0,
                        });
                        break;
                    case 'Trial':
                        toastr.info('Laporan ini masih dalam tahap Cross Check Oleh Team MPD !!!', '', {
                            "closeButton": true,
                            "timeOut": 0,
                        });
                        break;
                    default:
                        break;
                }

                switch (formket) {
                    case 'In-Progress':
                    case 'Trial':
                        toastr.info('Status Laporan ' + formket, '', {
                            "closeButton": true,
                            "timeOut": 0,
                        });
                        break;
                    case 'Modified':
                        toastr.info('Status Laporan ' + formket, 'Masih belum selesai', {
                            "closeButton": true,
                            "timeOut": 0,
                        });
                        break;
                    default:
                        break;
                }
            }
        });
    }

    const showLoading = function() {
        Swal.fire({
            title: 'Please Wait',
            allowEscapeKey: false,
            allowOutsideClick: false,
            showConfirmButton: false,
            width: 600,
            padding: '3em',
            color: '#ff6500',
            backdrop: `rgba(255, 0, 0, 0.1)`,
            onOpen: () => {
                Swal.showLoading();
            }
        });
    };

    $('form').submit(function() {
        showLoading();
    });

    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
</script>
<script>
    AOS.init();
</script>