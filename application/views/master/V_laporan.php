<?php $this->load->view('template/headbar'); ?>

<?php
$url = base_url();
?>
<section id="basic-datatable">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="mt-2 mb-1 d-flex justify-content-center">
                        <img style="width: 100px;" src="<?php echo base_url('assets/images/apoteksambu.png') ?>" />
                        <img style="width: 75px;" src="<?php echo base_url('assets/images/logo-baru.png') ?>" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <h2><?php echo $this->config->item("nama_perusahaan"); ?></h2>
                    </div>
                    <div class="card-body">
                        <div class="row mb-1">
                            <div class="col-md-3">
                                <strong>INPUT PEMBELIAN</strong>
                            </div>
                            <div class="col-md-12">

                                <?php if (isset($message)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="alert-heading">Warning!</h4>
                                        <p class="mb-0">
                                            <?php echo $message; ?>
                                        </p>
                                    </div>
                                <?php } ?>

                                <form action="<?php echo base_url('index.php/master/C_transaksi/index/simpan') ?>" id="master_transaksi" name="master_transaksi" method="post" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="aksi" value="simpan">

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Nama
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="nama" id="nama" class="form-control nama" value="" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            keluhan
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="keluhan" id="keluhan" class="form-control keluhan" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            obat
                                        </div>
                                        <div class="col-md-3">
                                            <select name="nama_obat" id="nama_obat" class="form-control" readonly>
                                                <option value="" disabled selected>Pilih Obat</option>
                                                <?php foreach ($dtobat as $obat): ?>
                                                    <option value="<?= $obat->id ?>"><?= $obat->nama_obat ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            pcs
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="pcs" id="pcs" class="form-control pcs" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            harga satuan
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="harga" id="harga" class="form-control harga" value="" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            total harga
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="total_harga" id="total_harga" class="form-control total_harga" value="" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn bg-gradient-primary"><i class="feather icon-save"></i> Simpan</button>
                                            <!-- Print Button -->
                                            <!-- <button onclick="window.print()" class="btn btn-primary">Cetak Struk</button> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <?php if ($this->session->flashdata('success')): ?>
                                                <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
                                            <?php endif; ?>

                                            <?php if ($this->session->flashdata('error')): ?>
                                                <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Laporan Transaksi</title>

                        <!-- DataTable Styles -->
                        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
                        </head>

                        <body>
                            <h2>Laporan Transaksi</h2>
                            <div class="table-responsive">
                                <table id="transaksiTable" class="display">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>Nama</th>
                                            <th>tanggal</th>
                                            <th>Keluhan</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="dtable">
                                        <?php if (!empty($dttransaksi)) : ?>
                                            <?php $no = 1; ?>
                                            <?php foreach ($dttransaksi as $transaksi): ?>
                                                <tr>
                                                    <!-- <td hidden> <input type="number" name="id[}" id="id" class="form-control id" style="text-align: center;" value="<?= $transaksi->id;  ?>" readonly></td> -->
                                                    <td> <?= $no++; ?></td>
                                                    <td> <input type="text" name="nama[}" id="nama" class="form-control nama" style="text-align: center;" value="<?= htmlspecialchars($transaksi->nama);  ?>" readonly></td>
                                                    <td> <input type="date" name="tanggal[}" id="tanggal" class="form-control tanggal" style="text-align: center;" value="<?= htmlspecialchars($transaksi->tanggal);;  ?>" readonly></td>
                                                    <td> <input type="text" name="keluhan[}" id="keluhan" class="form-control keluhan" style="text-align: center;" value="<?= htmlspecialchars($transaksi->keluhan);  ?>" readonly></td>
                                                    <td>
                                                        <!-- <button class="btn bg-gradient-info edit_button" id="edit_button" disabled><i class="fa fa-search"></i></button> -->
                                                        <!-- Tombol Edit -->
                                                        <a href="<?= base_url('index.php/master/C_transaksi/edit/' . $transaksi->id) ?>" class="btn bg-gradient-info edit_button"><i class="fa fa-search"></i></a>

                                                        <!-- Export PDF Button -->
                                                        <a href="<?= base_url('index.php/master/C_transaksi/cetak_struk/' . $transaksi->id) ?>" target="_blank">
                                                            <button type="button" class="btn bg-gradient-success">PDF</button>
                                                        </a>
                                                        <a href="<?= base_url('index.php/master/C_transaksi/delete/' . $transaksi->id) ?>"
                                                            class="btn bg-gradient-danger delete_button"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="6">Tidak ada data transaksi.</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#transaksiTable').DataTable();
    });

    $(document).on('click', '.edit_button', function() {
        var id = $(this).data('id'); // Mendapatkan ID dari button
        if (id) {
            window.location.href = "<?php echo base_url('index.php/master/C_transaksi/edit'); ?>/" + id;
        }
    });


    $(document).on('click', '#btn_export', function() {
        var transaksi_id = $(this).data('id'); // Ambil ID transaksi dari data-id
        window.location.href = "<?= base_url(); ?>index.php/master/C_transaksi/generate_pdf/" + transaksi_id;
    });
</script>

<script>
    $(document).ready(function() {
        // Saat nama obat dipilih
        $('#nama_obat').change(function() {
            var id_obat = $(this).val();

            if (id_obat) {
                $.ajax({
                    url: '<?= base_url("master/C_transaksi/get_harga_obat") ?>',
                    type: 'POST',
                    data: {
                        id_obat: id_obat
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#harga').val(data.harga); // Set harga satuan
                        $('#pcs').val(''); // Reset PCS
                        $('#total_harga').val(''); // Reset total harga
                    },
                    error: function() {
                        alert('Gagal mengambil harga satuan.');
                    }
                });
            } else {
                $('#harga').val('');
                $('#pcs').val('');
                $('#total_harga').val('');
            }
        });

        // Saat jumlah pcs diubah
        $('#pcs').on('input', function() {
            var harga = parseFloat($('#harga').val()) || 0;
            var pcs = parseInt($(this).val()) || 0;
            var total = harga * pcs;

            $('#total_harga').val(total);
        });
    });
</script>

<?php $this->load->view('template/footbar'); ?>
<?php $this->load->view('template/footbarend'); ?>