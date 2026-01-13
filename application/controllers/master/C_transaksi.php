<?php
class C_transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->model("master/M_transaksi");
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['Titel'] = 'Dashboard';
            $data['dttransaksi'] = $this->M_transaksi->get_transaksi1();
            $data['dtobat'] = $this->M_transaksi->get_namaobat()->result();

            // foreach ($data['dttransaksi'] as $transaksi) {
            //     $transaksi->transaksi_id = $transaksi->id; // Menyimpan ID transaksi sebagai transaksi_id
            // }
            // Cek apakah ada aksi
            $aksi = $this->input->post('aksi');

            if ($aksi == 'simpan') {
                // Ambil data input dari form
                $id = $this->input->post('id');
                $nama = $this->input->post('nama');
                $keluhan = $this->input->post('keluhan');
                $nama_obat = $this->input->post('nama_obat'); // Nama obat (ID obat)
                if (empty($nama_obat)) {
                    echo "Error: ID Obat tidak ditemukan!";
                    exit;
                }
                $pcs = $this->input->post('pcs'); // Jumlah pcs
                $tanggal = $this->input->post('tanggal'); // Tanggal transaksi
                if (empty($tanggal)) {
                    $tanggal = date('Y-m-d'); // Format default PHP untuk tanggal
                }

                // Ambil stock dan harga satuan dari database
                $obat = $this->M_transaksi->get_stock_obat($nama_obat); // Fungsi ini harus ada di model

                if ($obat && $obat->stock >= $pcs) {
                    $harga = $obat->harga; // Harga satuan
                    $total_harga = $pcs * $harga; // Hitung total harga

                    // Simpan transaksi
                    $datatransaksi = array(
                        'id' => $id,
                        'nama' => $nama,
                        'keluhan' => $keluhan,
                        'nama_obat' => $nama_obat,
                        'pcs' => $pcs,
                        'harga' => $harga,
                        'total_harga' => $total_harga,
                        'tanggal' => $tanggal
                    );

                    $this->M_transaksi->insert_dttransaksi($datatransaksi);

                    // Update stock obat (kurangi stock)
                    $stock_baru = $obat->stock - $pcs;
                    $this->M_transaksi->update_stock_obat($nama_obat, $stock_baru);

                    echo "<script>alert('Data berhasil disimpan dan stock obat diperbarui');</script>";
                    redirect('/master/C_transaksi', 'refresh');
                } else {
                    echo "<script>alert('stock tidak mencukupi.');</script>";
                    redirect('/master/C_transaksi', 'refresh');
                }
            }

            $this->load->view('master/V_laporan', $data);
        } else {
            redirect('C_login');
        }
    }


    public function get_harga_obat()
    {
        $id_obat = $this->input->post('id_obat');
        $data = $this->M_transaksi->get_harga_obat($id_obat);
        echo json_encode($data);
    }



    // public function cetak_struk()
    // {
    //     $data['content'] = $this->M_transaksi->get_transaksi1(); // Ambil data transaksi
    //     $this->load->view('master/struk_transaksi', $data); // Tampilkan halaman struk
    // }

    public function cetak_struk($id)
    {
        // Ambil data transaksi berdasarkan ID
        $data['data_transaksi'] = $this->M_transaksi->get_transaksi_by_id_edit($id);

        // Cek apakah data ditemukan
        if (!$data['data_transaksi']) {
            echo "<script>alert('Data transaksi tidak ditemukan!');</script>";
            redirect('/master/C_transaksi', 'refresh');
        }

        // Load view cetak struk
        $this->load->view('master/struk_transaksi', $data);
    }

    public function delete($id)
    {
        if ($this->M_transaksi->delete($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Data gagal dihapus.');
        }
        redirect('master/C_transaksi'); // Sesuaikan dengan URL tujuan setelah delete
    }


    public function edit($id)
    {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            // Ambil data transaksi berdasarkan ID
            $data['data_transaksi'] = $this->M_transaksi->get_transaksi_by_id_edit($id); // Pastikan model mengembalikan data transaksi berdasarkan ID

            // Cek apakah transaksi ditemukan
            if (!$data['data_transaksi']) {
                echo "<script>alert('Data transaksi tidak ditemukan!');</script>";
                redirect('/master/C_transaksi', 'refresh');
            }

            // Ambil daftar obat untuk dropdown atau pilihan obat
            $data['dtobat'] = $this->M_transaksi->get_namaobat()->result();

            // Cek apakah ada aksi untuk melakukan edit
            $aksi = $this->input->post('aksi');
            if ($aksi == 'edit') {
                // Ambil data input dari form untuk update
                $nama = $this->input->post('nama');
                $keluhan = $this->input->post('keluhan');
                $nama_obat = $this->input->post('nama_obat');
                $pcs = $this->input->post('pcs');
                $tanggal = $this->input->post('tanggal');

                // Ambil data obat sebelumnya
                $nama_obat_sebelumnya = $data['data_transaksi']->nama_obat;
                $pcs_sebelumnya = $data['data_transaksi']->pcs;

                // Ambil stock dan harga dari obat yang dipilih
                $obat_baru = $this->M_transaksi->get_stock_obat($nama_obat);
                $obat_lama = $this->M_transaksi->get_stock_obat($nama_obat_sebelumnya);

                // Jika nama obat berubah
                if ($nama_obat != $nama_obat_sebelumnya) {
                    // Kembalikan stok obat lama
                    $stock_baru_lama = $obat_lama->stock + $pcs_sebelumnya;
                    $this->M_transaksi->update_stock_obat2($nama_obat_sebelumnya, $stock_baru_lama);

                    // Update stok obat baru
                    $stock_baru_baru = $obat_baru->stock - $pcs;
                    $this->M_transaksi->update_stock_obat2($nama_obat, $stock_baru_baru);
                } else {
                    // Jika nama obat tidak berubah, hanya update stok berdasarkan PCS
                    $stock_baru_baru = $obat_baru->stock - ($pcs - $pcs_sebelumnya);
                    $this->M_transaksi->update_stock_obat2($nama_obat, $stock_baru_baru);
                }

                // Hitung harga dan total harga
                $harga = $obat_baru->harga;
                $total_harga = $pcs * $harga;

                // Update transaksi di database
                $datatransaksi = array(
                    'nama' => $nama,
                    'keluhan' => $keluhan,
                    'nama_obat' => $nama_obat,
                    'pcs' => $pcs,
                    'harga' => $harga,
                    'total_harga' => $total_harga,
                    'tanggal' => $tanggal
                );

                // Panggil fungsi model untuk update transaksi
                $this->M_transaksi->update_transaksi($id, $datatransaksi);

                echo "<script>alert('Data berhasil diperbarui dan stok obat diperbarui');</script>";
                redirect('/master/C_transaksi', 'refresh');
            }

            // Load halaman edit laporan dengan data transaksi
            $this->load->view('master/V_editlaporan', $data);
        } else {
            redirect('C_login');
        }
    }



    public function cetak_pdf($id)
    {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            // Ambil data transaksi berdasarkan ID
            $data['data_transaksi'] = $this->M_transaksi->get_transaksi_by_id_edit($id); // Pastikan model mengambil data transaksi dengan ID

            // Jika transaksi tidak ditemukan, tampilkan error
            if (!$data['data_transaksi']) {
                echo "<script>alert('Data transaksi tidak ditemukan!');</script>";
                redirect('/master/C_transaksi', 'refresh');
            }

            // Load library dompdf
            $this->load->library('dompdf_gen');

            // Load view untuk PDF struk
            $html = $this->load->view('master/struk_transaksi', $data, true);

            // Load Dompdf dengan opsi
            $options = new Dompdf\Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);
            $dompdf = new Dompdf\Dompdf($options);

            // Generate PDF
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Stream PDF ke browser
            $dompdf->stream("struk_transaksi_{$id}.pdf", ["Attachment" => false]);
        } else {
            redirect('C_login');
        }
    }
}
