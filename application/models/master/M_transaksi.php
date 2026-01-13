<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_transaksi extends CI_Model
{


    public function get_transaksi1()
    {
        return $this->db->query("SELECT * FROM transaksi ORDER BY id ASC")->result();
    }

    public function get_namaobat()
    {
        $this->db->select('id, nama_obat');
        return $this->db->get('obat');
    }

    public function get_transaksi()
    {
        $this->db->select('transaksi.id as transaksi_id, transaksi.nama, transaksi.keluhan, transaksi.pcs, transaksi.harga, transaksi.total_harga, transaksi.tanggal, obat.id AS obat_id, obat.nama_obat');
        $this->db->from('transaksi');
        $this->db->join('obat', 'transaksi.nama_obat = obat.id', 'left');
        $this->db->order_by('transaksi.id', 'asc');
        return $this->db->get()->result();
    }

    public function cek_transaksi($id, $nama, $keluhan)
    {
        $this->db->from('transaksi');
        $this->db->where('id', $id);
        $this->db->where('nama', $nama);
        $this->db->where('keluhan', $keluhan);
        return $this->db->get();
    }

    public function get_harga_obat($id_obat)
    {
        $this->db->select('harga');
        $this->db->from('obat'); // Sesuaikan dengan nama tabel obat Anda
        $this->db->where('id', $id_obat);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }

    public function update_stock_obat($id_obat, $stock_baru)
    {
        $this->db->where('id', $id_obat);
        $this->db->update('obat', ['stock' => $stock_baru]);
    }
    public function update_stock_obat2($id_obat, $new_stock)
    {
        $this->db->set('stock', $new_stock);
        $this->db->where('id', $id_obat);
        $this->db->update('obat'); // Pastikan nama tabel obat sesuai
    }


    public function get_stock_obat($id_obat)
    {
        $this->db->select('stock, harga');
        $this->db->from('obat');
        $this->db->where('id', $id_obat);
        $query = $this->db->get();

        return $query->row(); // Mengembalikan stock dan harga satuan
    }


    function insert_dttransaksi($datatransaksi)
    {
        $this->db->trans_begin();
        $this->db->insert('transaksi', $datatransaksi);
        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
        return $result;
        return TRUE;
    }

    public function get_transaksi_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();  // Mengembalikan array objek
        } else {
            return null;  // Jika tidak ada data, kembalikan null
        }
    }

    public function get_transaksi_by_id_edit($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('transaksi')->row(); // Mengambil 1 row transaksi berdasarkan ID
    }


    public function delete($id)
    {
        return $this->db->delete('transaksi', ['id' => $id]); // Ganti 'transaksi' dengan nama tabel yang sesuai
    }


    public function update_transaksi($id, $data)
    {
        // Update data transaksi pada tabel transaksi berdasarkan ID
        $this->db->where('id', $id);
        return $this->db->update('transaksi', $data);
    }
}
