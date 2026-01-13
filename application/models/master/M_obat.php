<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_obat extends CI_Model
{
    public function get_obat()
    {
        $this->db->select('obat.id as obat_id, obat.nama_obat, obat.stock, obat.harga, obat.supplier, obat.updated_by, supplier.id AS supplier_id, supplier.namasupplier');
        $this->db->from('obat');
        $this->db->join('supplier', 'obat.supplier = supplier.id', 'left');
        $this->db->order_by('obat.id', 'asc');
        return $this->db->get()->result(); // Mengembalikan array objek
    }

    public function get_obat_by_user($username)
    {
        $this->db->select('o.*, s.namasupplier AS namasupplier, u.nama');
        $this->db->from('obat o');
        $this->db->join('supplier s', 'o.supplier = s.id', 'left'); // Sesuaikan dengan tabel supplier
        $this->db->join('user u', 'o.updated_by = u.id', 'left'); // Sesuaikan dengan tabel user
        $this->db->where('u.nama', $username); // Filter berdasarkan user login
        return $this->db->get()->result();
    }


    public function get_suppliers()
    {
        return $this->db->get('supplier');
    }

    function cek_obat($nama_obat, $supplier)
    {
        $this->db->from('obat');
        $this->db->where('nama_obat', $nama_obat);
        $this->db->where('harga');
        $this->db->where('supplier', $supplier);
        $query = $this->db->get();
        return $query;
    }

    function insert_dtobat($data_obat)
    {
        // return $this->db->insert('obat', $data_obat);
        $this->db->trans_begin();
        $this->db->insert('obat', $data_obat);
        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
            $result = 0;
        } else {
            $this->db->trans_commit();
            $result = 1;
        }
        return $result;
        return TRUE;
    }

    public function get_obat_by_id($id)
    {
        return $this->db->get_where('obat', ['id' => $id])->row_array();
    }

    public function update_dtobat($id, $data)
    {
        $this->db->where('id', $id);
        $result = $this->db->update('obat', $data);
        if (!$result) {
            log_message('error', 'Update Query Error: ' . $this->db->last_query());
        }
        return $result;
    }

    function delete_obat($id)
    {
        $query = $this->db->delete('obat', "id = '$id'");
        return $query;
    }
}
