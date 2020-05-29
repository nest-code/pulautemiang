<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Drug_m extends CI_Model{

    public function get($id = null)
    {
               
            $this->db->select('tb_drugs.*, tb_category_drugs.name as category_name');
            $this->db->from('tb_drugs');
            $this->db->join('tb_category_drugs','tb_category_drugs.category_id = tb_drugs.category_id');

            if($id !=null) {
            $this->db->where('drug_id', $id);
            }
            $query = $this->db->get();
            return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['drug_name'],
        ];
        $this->db->insert('tb_drugs', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['drug_name'],
            'category_id' => $post['cad'],
            'price_unit' => $post['price_unit'],
            'stock' => $post['stock'],
            'information' => $post['information'],

            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->where('drug_id', $post['id']);
        $this->db->update('tb_drugs', $params);
    }

    
    public function del($id)
    {
        $this->db->where('drug_id',$id);
        $this->db->delete('tb_drugs');
    }

}