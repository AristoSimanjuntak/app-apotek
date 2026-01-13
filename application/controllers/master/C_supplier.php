<?php

class C_supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->model("master/M_supplier");
    }

    public function index()
    {
       $session_data            = $this->session->userdata('logged_in');
        if ($this->session->userdata('logged_in')) {
            $session_data       = $this->session->userdata('logged_in');
            $data['username']   = $session_data['username'];
            $data['password']   = $session_data['password'];
            $data['Titel']      = 'Dashboard';
            $data['dtsupplier']     = $this->M_supplier->get_supplier();
            $data['dtpersonil'] = $data['username'];
            $aksi               = $this->uri->segment(4);

            $namasupplier          = $this->input->post('namasupplier');
            $alamat           = $this->input->post('alamat');
            $email              = $this->input->post('email');
            $nomor            = $this->input->post('nomor');
           

            if ($aksi == 'simpan') {

                $cek_supplier = $this->M_supplier->cek_supplier($supplier, $alamat);

                if ($cek_supplier->num_rows() > 0) {
                    $data['message']    = 'Datasupplier <strong>' . $supplier . '</strong> Dengan Supplier  <strong>' . $alamat . '</strong> sudah pernah disimpan.!!';
                    $data['dtsupplier']     = $this->M_supplier->get_suppliers();
                    $this->load->view('master/V_supplier', array_merge($data));
                } else {
                    $datasupplier = array(
                        'namasupplier'         => $namasupplier,
                        'alamat'          => $alamat,
                        'email'             => $email,
                        'nomor'             => $nomor,
                        
                    );

                    $this->M_supplier->insert_dtsupplier($datasupplier);
                    echo "<script>alert('Data berhasil disimpan....!!!! ');</script>";
                    redirect('/master/C_supplier', 'refresh');
                }
            }
            $this->load->view('master/V_supplier', array_merge($data)); 
          
        } else {
            //Jika tidak ada session di kembalikan ke halaman login
            redirect('C_login', 'refresh');
        }
    }

    public function update()
    {
        $id           = $this->input->post('id');
        $namasupplier          = $this->input->post('namasupplier');
        $alamat           = $this->input->post('alamat');
        $email              = $this->input->post('email');
        $nomor            = $this->input->post('nomor');
       
        // check Jika Id Ada
        if (!empty($id)) {
            $datasupplier = array(
                'namasupplier'         => $namasupplier,
                'alamat'          => $alamat,
                'email'             => $email,
                'nomor'             => $nomor,

               
                
            );

            // Update data
            $update_result = $this->M_supplier->update_dtsupplier($id, $datasupplier);

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
            $this->session->set_flashdata('message', "ID supplier tidak ditemukan.");
            redirect('/master/C_supplier', 'refresh');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        // check Jika Id Ada
        if (!empty($id)) {
            // Update data
            $delete_supplier = $this->M_supplier->delete_supplier($id);

            if ($delete_supplier) {
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
            redirect('/master/C_supplier', 'refresh');
        }
    }

    public function generate_pdf()
    {
        $this->load->library('dompdf_gen');
        $data['content'] = $this->M_supplier->get_supplier();

        // Load the view and pass the data
       $html = $this->load->view('master/pdf_supplier', $data, true);

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

