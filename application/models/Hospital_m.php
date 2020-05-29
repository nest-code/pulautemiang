<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_m extends CI_Model{

        public function get($id = 1)
        {
                $this->db->from('tb_hospitals');
                if($id !=null) {
                $this->db->where('hospital_id', $id);
                }
                $query = $this->db->get();
                return $query->row();

        }





        
}
