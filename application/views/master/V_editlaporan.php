<?php $this->load->view('template/headbar'); ?>

<section id="edit-datatable">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="mt-2 mb-1 d-flex justify-content-center">
                        <img style="width: 100px;" src="<?php echo base_url('assets/images/apoteksambu.png') ?>" />
                        <img style="width: 75px;" src="<?php echo base_url('assets/images/logo-baru.png') ?>" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <h2>Edit Transaksi</h2>
                    </div>
                    <div class="card-body">
                        <div class="row mb-1">
                            <div class="col-md-3">
                                <strong>DETAIL PEMBELIAN</strong>
                            </div>
                            <div class="col-md-12">
                                <form action="<?= base_url('index.php/master/C_transaksi/edit/' . $data_transaksi->id) ?>" method="POST">
                                    <input type="hidden" name="aksi" value="edit" />
                                    <input type="hidden" name="id" value="<?= $data_transaksi->id ?>">

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Nama
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="nama" id="nama" class="form-control nama" value="<?= $data_transaksi->nama ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Keluhan
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="keluhan" id="keluhan" class="form-control keluhan" value="<?= $data_transaksi->keluhan ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Obat
                                        </div>
                                        <div class="col-md-3">
                                            <select name="nama_obat" id="nama_obat" class="form-control">
                                                <option value="" disabled>Pilih Obat</option>
                                                <?php foreach ($dtobat as $obat): ?>
                                                    <option value="<?= $obat->id ?>" <?= $data_transaksi->nama_obat == $obat->id ? 'selected' : '' ?>>
                                                        <?= $obat->nama_obat ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            pcs
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="pcs" id="pcs" class="form-control pcs" value="<?= $data_transaksi->pcs ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Harga Satuan
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="harga" id="harga" class="form-control harga" value="<?= $data_transaksi->harga ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Total Harga
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="total_harga" id="total_harga" class="form-control total_harga" value="<?= $data_transaksi->total_harga ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Tanggal
                                        </div>
                                        <div class="col-md-3">
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $data_transaksi->tanggal ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn bg-gradient-primary"><i class="feather icon-save"></i> Simpan</button>
                                            <!-- <button onclick="window.print()" class="btn btn-primary">Cetak Struk</button> -->
                                            <button class="btn btn-primary" id="btn_cetak_pdf"><i class="feather icon-download"></i> Cetak Struk</button>
                                        </div>
                                    </div>

                                    <?php if ($this->session->flashdata('success')): ?>
                                        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
                                    <?php endif; ?>

                                    <?php if ($this->session->flashdata('error')): ?>
                                        <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
                                    <?php endif; ?>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
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


    // Ketika tombol cetak struk diklik
    $(document).on('click', '#btn_cetak_pdf', function() {
        var transaksi_id = <?= $data_transaksi->id ?>; // ID transaksi
        window.open("<?= base_url('index.php/master/C_transaksi/cetak_pdf/') ?>" + transaksi_id, '_blank');
    });
</script>

<?php $this->load->view('template/footbar'); ?>
<?php $this->load->view('template/footbarend'); ?>