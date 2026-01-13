<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_supplier extends CI_Model
{
    public function get_supplier()
    {
        return $this->db->query("SELECT * FROM supplier ORDER BY id ASC")->result();
    }

    public function get_suppliers()
    {
        $this->db->select('id, namasupplier');
        $this->db->from('supplier'); // Tabel supplier
        $query = $this->db->get();
        return $query->result(); // Mengembalikan array objek
        ;}


    function cek_supplier($supplier, $alamat)
    {
        $this->db->from('supplier');
        $this->db->where('namasupplier', $namasupplier);
        $this->db->where('alamat', $alamat);
        $this->db->where('email', $email);
        $this->db->where('nomor', $nomor);
        $query = $this->db->get();
        return $query;
    }

    function insert_dtsupplier($datasupplier)
    {
        $this->db->trans_begin();
        $this->db->insert('supplier', $datasupplier);
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

    function update_dtsupplier($id, $datasupplier)
    {
        $this->db->trans_begin();
        $this->db->where('id', $id);
        $this->db->update('supplier', $datasupplier);
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

    function delete_supplier($id)
    {
        $query = $this->db->delete('supplier', "id = '$id'");
        return $query;
    }
}

