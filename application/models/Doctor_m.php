<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_m extends CI_Model{

    
    public function get($id = null)
    {

        
            // $query=$this->db->query("SELECT tb_doctors.doctor_id,tb_doctors.num_idi,tb_doctors.name,tb_doctors.gender,tb_doctors.birthday,tb_doctors.address,tb_doctors.email,tb_doctors.phone,tb_poli.poli_id, tb_poli.name AS poli_name from tb_doctors inner join tb_poli on tb_doctors.poli_id=tb_poli.poli_id");
           
           
            $this->db->select('tb_doctors.*, tb_poli.name as poli_name');
            $this->db->from('tb_doctors');
            $this->db->join('tb_poli','tb_doctors.poli_id = tb_poli.poli_id');
            if($id !=null) {
            $this->db->where('doctor_id', $id);
            }
            $query = $this->db->get();
            return $query;
    }

 

    public function add($post)
    {
        $params = [
            'num_idi' => $post['num_idi'],
            'name' => $post['doctor_name'],
            'gender' => $post['gender'],
            'birthday' => $post['birthday'],
            'address' => $post['address'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'poli_id' => $post['poli_id']     
        ];
        $this->db->insert('tb_doctors', $params);
    }

    public function edit($post)
    {
        $params = [
            'num_idi' => $post['num_idi'],
            'name' => $post['doctor_name'],
            'gender' => $post['gender'],
            'birthday' => $post['birthday'],
            'address' => $post['address'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'poli_id' => $post['poli'],   
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->where('doctor_id', $post['id']);
        $this->db->update('tb_doctors', $params);
    }

    
    public function del($id)
    {
        $this->db->where('doctor_id',$id);
        $this->db->delete('tb_doctors');
    }

}