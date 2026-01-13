<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_obat extends CI_Model
{




    public function get_obat()
    {
        $this->db->select('obat.id as id, obat.nama_obat, obat.stock, obat.harga, supplier.id AS supplier_id, supplier.namasupplier');
        $this->db->from('obat');
        $this->db->join('supplier', 'obat.supplier = supplier.id', 'left');
        $this->db->order_by('obat.id', 'asc');
        return $this->db->get()->result(); // Mengembalikan array objek
    }

    /*public function get_obat()
    {
        return $this->db->query("SELECT * FROM obat ORDER BY id_ ASC")->result();
    }*/
 

   public function get_suppliers()
    {
        return $this->db->get('supplier');
    }

    function cek_obat($nama_obat, $supplier)
    {
        $this->db->from('obat');
        $this->db->where('nama_obat', $nama_obat);
        $this->db->where('supplier', $supplier);
        //$this->db->where('stock', $stock);
       // $this->db->where('harga' , $harga);
       
        $query = $this->db->get();
        return $query;
    }

    function insert_dtobat($data_obat)
    {
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

    function update_dtobat($id, $data_obat)
    {
        $this->db->trans_begin();
        $this->db->where('id', $id);
        $this->db->update('obat', $data_obat);
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

    function delete_obat($id)
    {
        $query = $this->db->delete('obat', "id = '$id'");
        return $query;
    }
}
