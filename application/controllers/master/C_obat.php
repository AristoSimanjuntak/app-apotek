<?php

class C_obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->model("master/M_obat");
    }

    public function index()
    {
        $session_data            = $this->session->userdata('logged_in');
        if ($this->session->userdata('logged_in')) {
            $session_data       = $this->session->userdata('logged_in');
            $data['username']   = $session_data['username'];
            $data['password']   = $session_data['password'];
            $data['Titel']      = 'Dashboard';
            $data['dtobat']     = $this->M_obat->get_obat();
            $data['dtpersonil'] = $data['username'];
            $data['suppliers'] = $this->M_obat->get_suppliers()->result();
            $aksi               = $this->uri->segment(4);

            $nama_obat          = $this->input->post('nama_obat');
            $supplier           = $this->input->post('supplier');
            $stock              = $this->input->post('stock');
            $harga              = $this->input->post('harga');
            $updated_by         = $this->input->post('updated_by');
            //$updated_by = $session_data['username']; // Menggunakan session langsung
            // $cek_obat = $this->M_obat->cek_obat($nama_obat, $supplier, $harga);
            //

            if ($aksi == 'simpan') {

                $cek_obat = $this->M_obat->cek_obat($nama_obat, $supplier);

                if ($cek_obat->num_rows() > 0) {
                    $data['message']    = 'Data Obat <strong>' . $nama_obat . '</strong> Dengan Supplier  <strong>' . $supplier . '</strong> sudah pernah disimpan.!!';
                    $data['dtobat']     = $this->M_obat->get_obat();
                    $this->load->view('master/V_obat', array_merge($data));
                } else {

                    $harga = preg_replace('/[^0-9]/', '', $harga); // Hanya ambil angka
                    $harga = intval($harga);
                    $data_obat = array(
                        'nama_obat'         => $nama_obat,
                        'supplier'          => $supplier,
                        'stock'             => $stock,
                        'harga'             => $harga,
                        'updated_by'        => $updated_by[0]
                    );

                    $this->M_obat->insert_dtobat($data_obat);
                    echo "<script>alert('Data berhasil disimpan....!!!! ');</script>";
                    redirect('/master/C_obat', 'refresh');
                }
            }
            $this->load->view('master/V_obat', array_merge($data));
        } else {
            //Jika tidak ada session di kembalikan ke halaman login
            redirect('C_login', 'refresh');
        }
    }


    public function update()
    {
        // Debug data input
        log_message('debug', 'POST Data: ' . json_encode($this->input->post()));

        // Ambil data
        $id = $this->input->post('id');
        $nama_obat = $this->input->post('nama_obat');
        $supplier = $this->input->post('supplier');
        $stock = $this->input->post('stock');
        $harga = $this->input->post('harga');
        $updated_by = $this->input->post('updated_by');

        // Validasi data
        if (empty($id) || empty($nama_obat) || empty($supplier) || empty($stock) || empty($harga) || empty($updated_by)) {
            log_message('error', 'Validasi gagal: Data tidak lengkap.');
            echo json_encode([
                'status' => 0,
                'pesan' => 'Data tidak lengkap atau ID tidak ditemukan.'
            ]);
            return;
        }

        // Cek apakah obat dengan ID ditemukan
        $data_obat = $this->M_obat->get_obat_by_id($id);
        if (!$data_obat) {
            log_message('error', 'Validasi gagal: ID tidak ditemukan.');
            echo json_encode([
                'status' => 0,
                'pesan' => 'ID tidak ditemukan.'
            ]);
            return;
        }

        $harga = preg_replace('/[^0-9]/', '', $harga); // Hanya ambil angka

        // Pastikan harga dalam format integer
        $harga = intval($harga);
        // Update data
        $data_update = [
            'nama_obat' => $nama_obat,
            'supplier' => $supplier,
            'stock' => $stock,
            'harga' => $harga,
            'updated_by' => $updated_by
        ];

        $update_result = $this->M_obat->update_dtobat($id, $data_update);
        if ($update_result) {
            log_message('debug', 'Update berhasil untuk ID: ' . $id);
            echo json_encode([
                'status' => 1,
                'pesan' => 'Berhasil Update Data Obat.'
            ]);
        } else {
            log_message('error', 'Update gagal untuk ID: ' . $id);
            echo json_encode([
                'status' => 0,
                'pesan' => 'Gagal Update Data Obat.'
            ]);
        }
    }


    public function delete()
    {
        $id = $this->input->post('id');
        if ($id) {
            // Ganti dengan query untuk menghapus data berdasarkan ID
            $this->db->where('id', $id);
            $this->db->delete('obat');

            // Cek apakah penghapusan berhasil
            if ($this->db->affected_rows() > 0) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Data gagal dihapus']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'ID tidak valid']);
        }
    }

    public function generate_pdf()
    {
        $this->load->library('dompdf_gen');
        $data['content'] = $this->M_obat->get_obat();

        // Load the view and pass the data
        $html = $this->load->view('master/pdf_obat', $data, true);

        // Load Dompdf with options
        $options = new Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf\Dompdf($options);

        // Generate the PDF
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Stream the PDF to the browser
        $dompdf->stream("dynamic_pdf.pdf", ["Attachment" => false]);
    }
}
