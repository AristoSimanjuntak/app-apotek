<?php $this->load->view('template/headbar'); ?>

<link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/css/extensions/swiper.min.css">
<link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/css/plugins/extensions/swiper.css">

<section id="basic">
    <div class="row">
        <div class="col-sm-12">
            <div class="card ">
                <div class="card-content">
                    <div class="card-body text-center">
                        <div>
                            <div class="mt-2 mb-1 d-flex justify-content-center">
                                <img style="width: 350px;" src="<?php echo base_url('assets/images/hut57.png') ?>" />
                                <!-- <img style="width: 200px; height:100;" src="<?php echo base_url('assets/images/apoteksambu.png') ?>" /> -->
                            </div>
                            <div class="mt-1 mb-1 d-flex justify-content-center">
                                <img style="width: 90px;" src="<?php echo base_url('assets/images/apoteksambu.png') ?>" />
                                <img style="width: 65px;" src="<?php echo base_url('assets/images/logo-baru.png') ?>" />
                                <img style="width: 65px;" src="<?php echo base_url('assets/images/Kara.png') ?>" />
                            </div>
                        </div>

                        <h3 class="mt-2">Hallo,
                            <?php echo greeting_time() ?><strong>
                                <?= $this->session->userdata('logged_in')['username']; ?>
                            </strong> have a wonderful day!
                        </h3>
                        <hr>

                        <marquee direction="left" class="bg-gradient-primary p-1 rounded shadow" scrollamount="9">
                            <?php $list_quote =
                                [
                                    'Mau pulang selamat? Utamakan keselamatan kerja',
                                    'Berhati-hatilah dalam bekerja karena keluarga menunggu di rumah',
                                    'Hentikan kecelakaan, sebelum ia menghentikan kita',
                                    'Jadikan hari ini sebagai hari terbaik, dengan bekerja selamat',
                                    'Safety adalah gerbang utama menuju kesuksesan',
                                    'Aturan keselamatan kerja adalah alat kerja terbaik. Maka patuhilah!',
                                    'Tiada hari tanpa keselamatan kerja',
                                    'Gunakanlah Aplikasi dengan bijak',
                                ];
                            echo '<h4 class="font-weight-bold text-uppercase text-white" > <image src="' . base_url("assets/images/datepicker_trigger.png") . '" width="25"> ' . tanggal_indo(date('Y-m-d'), TRUE) . ' ~ ' . $list_quote[rand(0, 6)] . '</h4>';
                            ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->

<?php $this->load->view('template/footbar'); ?>

<script src="<?= site_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/vendors/js/extensions/swiper.min.js"></script>
<script src="<?= site_url(); ?>assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/js/scripts/extensions/swiper.js"></script>

<?php $this->load->view('template/footbarend'); ?>