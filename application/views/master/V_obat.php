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
                        <form action="<?php echo base_url('index.php/master/C_obat/index/simpan') ?>" id="master_obat" name="master_obat" method="post" role="form" enctype="multipart/form-data">
                            <div class="row mb-1">
                                <div class="col-md-3">
                                    <strong>Tambah Obat</strong>
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
                                    <input type="hidden" name="id" value="" id="id" size="5">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Nama Obat
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="nama_obat" id="nama_obat" class="form-control nama_obat" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Supplier
                                        </div>
                                        <div class="col-md-3">
                                            <select name="supplier" id="supplier" class="hitung_spec form-control supplier" style="text-align:center;" readonly>
                                                <option value=""> - Pilih -</option>
                                                <?php foreach ($suppliers as $supplier) : ?>
                                                    <option value="<?= $supplier->id ?>"><?= $supplier->namasupplier ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Stock
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="stock" id="stock" class="form-control stock" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Harga
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="harga" id="harga" class="form-control harga" value="" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            Ditambah Oleh
                                        </div>
                                        <div class="col-md-3">
                                            <select name="updated_by[]" id="updated_by" class="hitung_spec form-control updated_by" style="text-align:center;" readonly>
                                                <option value=""> - Pilih -</option>
                                                <option value="<?= $dtpersonil ?>"> <?= $dtpersonil ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" align="right">
                                            <button type="submit" class="btn bg-gradient-primary" id="btnsimpan"><i class="feather icon-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>
                        <br>
                        <div class="row mb-1">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <strong>Master Obat</strong>
                                </div>
                                <div class="table-responsive" style="max-height: 800px;">
                                    <table class="table table-striped table-bordered sticky-header">
                                        <thead>
                                            <tr style="color: black;">
                                                <th class="table-primary align-middle text-center" style="color: black" rowspan="3" width="10">&#x2714;</th>
                                                <th class="table-primary align-middle text-center">Nama Obat</th>
                                                <th class="table-primary align-middle text-center">Suppiler</th>
                                                <th class="table-primary align-middle text-center">Stock</th>
                                                <th class="table-primary align-middle text-center">harga</th>
                                                <th class=" table-primary align-middle text-center">Last Update</th>
                                                <th class=" table-primary align-middle text-center" colspan='2'>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody id="dtable">

                                            <?php if (!isset($dtobat)) { ?>
                                                <tr>
                                                    <td valign="top"><input name="chk[]" type="checkbox" /></td>
                                                    <td><input type="text" name="nama_obat[]" id="nama_obat" class="form-control w-auto nama_obat" style="text-align: center;" value=""> </td>
                                                    <td><input type="text" name="supplier[]" id="supplier" class="form-control w-auto supplier" style="text-align: center;" value=""> </td>
                                                    <td><input type="number" name="stock[]" id="stock" class="form-control w-auto stock" style="text-align: center;" value=""> </td>
                                                    <td><input type="number" name="harga[]" id="harga" class="form-control w-auto harga" style="text-align: center;" value=""> </td>
                                                    <td>
                                                        <select name="updated_by[]" id="updated_by" class="hitung_spec form-control updated_by w-auto" style="text-align:center;" readonly>
                                                            <option value=""> - Pilih -</option>
                                                            <?php foreach ($dtpersonil as $dtpersonil_row) { ?>
                                                                <option value="<?= $dtpersonil_row ?>"> <?= $dtpersonil_row ?></option>
                                                            <?php
                                                            } ?>
                                                        </select>
                                                    </td>
                                                    <input type="hidden" class="id" value="<?= $obat->obat_id ?>" />
                                                </tr>
                                                <?php
                                            } else {
                                                $no = 1;
                                                foreach ($dtobat as $obat) { ?>
                                                    <tr>
                                                        <td valign="top"><input name="chk[]" type="checkbox" class="chk" /></td>
                                                        <td><input type="text" class="form-control nama_obat" style="text-align: center;" value="<?= $obat->nama_obat ?>" readonly /></td>
                                                        <td>
                                                            <select name="supplier[]" id="supplier" class="hitung_spec form-control supplier" style="text-align:center;" readonly>
                                                                <option value="<?= $obat->supplier_id ?>"><?= $obat->namasupplier ?></option>
                                                                <?php foreach ($suppliers as $supplier) { ?>
                                                                    <option value="<?= $supplier->id; ?>"><?= $supplier->namasupplier; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </td>
                                                        <td><input type="number" name="stock[]" class="form-control stock" style="text-align: center;" value="<?= $obat->stock ?>" readonly /></td>
                                                        <td><input type="text" name="harga[]" class="form-control harga" style="text-align: center;" value="<?= 'Rp ' . number_format($obat->harga, 0, ',', '.'); ?>" readonly /></td>
                                                        <!-- <td><input type="text" name="updated_by[]" class="form-control updated_by" style="text-align: center;" value="<?= $dtpersonil ?>" readonly /></td> -->
                                                        <td>
                                                            <select name="updated_by[]" id="updated_by" class="hitung_spec form-control updated_by" style="text-align:center;" readonly>
                                                                <option value="<?= $dtpersonil ?>" <?php if ($dtpersonil) {
                                                                                                        echo 'selected';
                                                                                                    } ?>> <?= $dtpersonil ?></option>
                                                            </select>
                                                        </td>
                                                        <input type="hidden" class="id" value="<?= $obat->obat_id ?>" />

                                                        <td>
                                                            <button type="button" class="btn bg-gradient-info edit_button" disabled>Edit</button>
                                                            <button type="button" class="btn bg-gradient-danger delete_button" disabled>Delete</button>
                                                        </td>
                                                    </tr>
                                            <?php }
                                            } ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="table-primary align-middle text-center fixed-column" colspan="7" align="center">
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="table-responsive" style="max-height: 800px;">
                                        <div class="box-footer">
                                            <div align="left">
                                                <button class="btn bg-gradient-success" id="btn_export"><i class="feather icon-download"></i> Export PDF</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('template/footbar'); ?>

<script>
    // Kode untuk menghandle checkbox
    $(document).on('click', '.chk', function() {
        var isChecked = $(this).is(':checked');
        $(this).closest('tr').find('.nama_obat, .supplier, .stock, .harga').prop('readonly', !isChecked);
        $(this).closest('tr').find('.edit_button, .delete_button').prop('disabled', !isChecked);
    });

    // Handle the edit button click
    $(document).on('click', '.edit_button', function() {
        var row = $(this).closest('tr');
        var id = row.find('.id').val();
        var nama_obat = row.find('.nama_obat').val();
        var supplier = row.find('.supplier').val();
        var stock = row.find('.stock').val();
        var harga = row.find('.harga').val();
        var updated_by = row.find('.updated_by').val();

        // Perform an AJAX request to update the data
        $.ajax({
            url: '<?= base_url("index.php/master/C_obat/update"); ?>',
            type: 'POST',
            data: {
                id: id,
                nama_obat: nama_obat,
                supplier: supplier,
                stock: stock,
                harga: harga,
                updated_by: updated_by
            },
            success: function(response) {
                alert('Data berhasil diperbarui');
                location.reload(); // Reload the page to reflect changes
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", error);
                alert('Terjadi kesalahan saat memperbarui data.');
            }
        });
    });

    // Kode untuk tombol delete
    $(document).on('click', '.delete_button', function() {
        let row = $(this).closest('tr');
        let id = row.find('.id').val(); // Ambil ID obat

        // Konfirmasi sebelum menghapus
        if (confirm("Apakah Anda yakin ingin menghapus obat ini?")) {
            $.ajax({
                url: '<?= base_url("index.php/master/C_obat/delete"); ?>', // Ganti dengan URL delete controller
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    console.log("Response:", response); // Debug response
                    alert('Data berhasil dihapus');
                    row.remove(); // Hapus baris setelah berhasil dihapus
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", error);
                    console.log("XHR Response:", xhr.responseText);
                    alert('Terjadi kesalahan saat menghapus data.');
                }
            });
        }
    });

    // $(document).on('input', '.harga', function() {
    //     value = value.replace(/[^0-9]/g, '');
    //     value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    //     $(this).val('RP' + value);
    // });
    // Format angka dengan awalan "RP" dan pemisah ribuan saat input
    $(document).on('input', '.harga', function() {
        let value = $(this).val(); // Ambil nilai input
        value = value.replace(/RP/g, ''); // Hapus awalan "RP" jika ada
        value = value.replace(/[^0-9]/g, ''); // Hapus karakter non-angka
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Tambahkan pemisah ribuan
        $(this).val('RP' + value); // Tampilkan nilai dengan awalan "RP"
    });

    // Bersihkan format sebelum mengirim data ke server
    $('form').on('submit', function() {
        let value = $('.harga').val(); // Ambil nilai input harga
        value = value.replace(/RP/g, ''); // Hapus awalan "RP"
        value = value.replace(/\./g, ''); // Hapus semua titik
        $('.harga').val(value); // Set nilai input dengan angka murni sebelum submit
    });



    $(document).on('click', '#btn_export', function() {
        window.location.href = "<?= base_url(); ?>index.php/master/C_obat/generate_pdf"
    })
</script>


<?php $this->load->view('template/footbarend'); ?>