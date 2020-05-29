<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_m extends CI_Model{

    public function get($id = null)
    {
            $this->db->from('tb_patients');
            if($id !=null) {
            $this->db->where('patient_id', $id);
            }
            $query = $this->db->get();
            return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['patient_name'],
        ];
        $this->db->insert('tb_patients', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['patient_name'],
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->where('patient_id', $post['id']);
        $this->db->update('tb_patients', $params);
    }

    
    public function del($id)
    {
        $this->db->where('patient_id',$id);
        $this->db->delete('tb_patients');
    }

}