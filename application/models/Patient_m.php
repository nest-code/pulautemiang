<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_m extends CI_Model{

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
            'num_ktp' => $post['num_ktp'],
            'name' => $post['patient_name'],
            'gender' => $post['gender'],
            'birthday' => $post['birthday'],
            'blood' => $post['blood'],
            'address' => $post['address'],
            'email' => $post['email'],
            'phone' => $post['phone']
        ];
        $this->db->insert('tb_patients', $params);
    }

    public function edit($post)
    {
        $params = [
            'num_ktp' => $post['num_ktp'],
            'name' => $post['patient_name'],
            'birthday' => $post['birthday'],
            'blood' => $post['blood'],
            'address' => $post['address'],
            'email' => $post['email'],
            'phone' => $post['phone'],
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