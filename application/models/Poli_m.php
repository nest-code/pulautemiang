<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Poli_m extends CI_Model{

    public function get($id = null)
    {
            $this->db->from('tb_poli');
            if($id !=null) {
            $this->db->where('poli_id', $id);
            }
            $query = $this->db->get();
            return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['poli_name'],
        ];
        $this->db->insert('tb_poli', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['poli_name'],
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->where('poli_id', $post['id']);
        $this->db->update('tb_poli', $params);
    }

    
    public function del($id)
    {
        $this->db->where('poli_id',$id);
        $this->db->delete('tb_poli');
    }

}