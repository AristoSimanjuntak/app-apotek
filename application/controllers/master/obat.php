<?php

class C_obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->model("master/M_obat");
        $this->load->model("master/M_supplier");
    }

    public function index()
    {
        $session_data = $this->session->userdata('logged_in');

        // Cek apakah session ada
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['password'] = $session_data['password'];
            $data['Titel'] = 'Dashboard';
            $data['dtobat'] = $this->M_obat->get_obat();
            $data['dtpersonil'] = $data['username'];

            // Supplier data
            //$data['get_supplier'] = $this->M_obat->supplier();
            $this->load->model('M_obat');
            $data['dtobat'] = $this->M_obat->get_obat1()->result();
          


            // Aksi yang diterima dari URL
            $aksi = $this->uri->segment(4);

            // Data yang dikirimkan melalui POST
            $nama_obat = $this->input->post('nama_obat');
            $id = $this->input->post('namasupplier');
            $stock = $this->input->post('stock');
            $harga = $this->input->post('harga');
            $updated_by = $this->input->post('updated_by');

            // Cek obat yang sudah ada
            $cek_obat = $this->M_obat->cek_obat($nama_obat, $supplier, $harga);

            if ($aksi == 'simpan') {
                // Cek apakah obat dan supplier sudah ada
                $cek_obat = $this->M_obat->cek_obat($nama_obat, $supplier);

                if ($cek_obat->num_rows() > 0) {
                    // Jika sudah ada, tampilkan pesan error
                    $data['message'] = 'Data Obat <strong>' . $nama_obat . '</strong> Dengan Supplier <strong>' . $supplier . '</strong> sudah pernah disimpan.!!';
                    $data['dtobat'] = $this->M_obat->get_obat();
                    $this->load->view('master/V_obat', array_merge($data));
                } else {
                    // Jika belum ada, simpan data obat baru
                    $data_obat = array(
                        'nama_obat' => $nama_obat,
                        'namasupplier' => $namasupplier,
                        'stock' => $stock,
                        'harga' => $harga,
                        'updated_by' => $updated_by[0]
                    );

                    $this->M_obat->insert_dtobat($data_obat);
                    echo "<script>alert('Data berhasil disimpan....!!!! ');</script>";
                    redirect('/master/C_obat', 'refresh');
                }
            }

            // Tampilkan view dengan data
            $this->load->view('master/V_obat', array_merge($data));
        } else {
            // Jika tidak ada session, arahkan ke halaman login
            redirect('C_login', 'refresh');
        }
    }


    

  public function update()
    {
        $id           = $this->input->post('id_obat');
        $nama_obat    = $this->input->post('nama_obat');
        $namasupplier     = $this->input->post('namasupplier');
        $stock        = $this->input->post('stock');
        $harga       = $this->input->post('harga');
        $updated_by   = $this->input->post('updated_by');

        // check Jika Id Ada
        if (!empty($id)) {
            $data_obat = array(
                'nama_obat'  => $nama_obat,
                'namasupplier'   => $namasupplier,
                'stock'      => $stock,
                'harga'      => $harga,
                'updated_by' => $updated_by
            );

            // Update data
            $update_result = $this->M_obat->update_dtobat($id, $data_obat);

            if ($update_result) {
                $hasil = array(
                    'status'  => 1,
                    'vstatus' => 'berhasil',
                    'pesan'   => "Berhasil Update Data Obat",
                );
            } else {
                $hasil = array(
                    'status'  => 0,
                    'vstatus' => 'gagal',
                    'pesan'   => "Gagal Update Data Obat",
                );
            }
            echo json_encode($hasil);
        } else {
            // ID Obat TIdak Ditemukan
            $this->session->set_flashdata('message', "ID Obat tidak ditemukan.");
            redirect('/master/C_obat', 'refresh');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id_obat');
        // check Jika Id Ada
        if (!empty($id)) {
            // Update data
            $delete_obat = $this->M_obat->delete_obat($id);

            if ($delete_obat) {
                $hasil = array(
                    'status'  => 1,
                    'vstatus' => 'berhasil',
                    'pesan'   => "Data Obat Berhasil Dihapus",
                );
            } else {
                $hasil = array(
                    'status'  => 0,
                    'vstatus' => 'gagal',
                    'pesan'   => "Gagal Hapus Data Obat",
                );
            }
            echo json_encode($hasil);
        } else {
            // ID Obat TIdak Ditemukan
            $this->session->set_flashdata('message', "ID Obat tidak ditemukan.");
            redirect('/master/C_obat', 'refresh');
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







