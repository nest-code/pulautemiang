<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model{

	public function login($post)
	{ 
                $this->db->select('*');
                $this->db->from('tb_users');
                $this->db->where('username', $post['username']);
                $this->db->where('password', sha1($post['password']));
                $query = $this->db->get();
                return $query;
        } 
        
        public function get($id = null)
        {
                $this->db->from('tb_users');
                if($id !=null) {
                $this->db->where('user_id', $id);
                }
                $query = $this->db->get();
                return $query;
        }


        public function add ($post)
        {
                $post = $this->input->post(null, TRUE);
                $params ['name'] = $post ['fulname'];
                $params ['username'] = $post ['username'];
                $params ['password'] = sha1($post['password']);
                $params ['address'] = $post ['address'] != "" ? $post['address'] : null;
                $params ['level'] = $post ['level'];
                $this->db->insert('tb_users', $params);
        }

        public function edit ($post)
        {
                $post = $this->input->post(null, TRUE);
                $params ['name'] = $post ['fulname'];
                $params ['username'] = $post ['username'];
                if(!empty($post['password'])){
                $params ['password'] = sha1($post['password']);
                }
                $params ['address'] = $post ['address'] != "" ? $post['address'] : null;
                $params ['level'] = $post ['level'];
                $this->db->where('user_id', $post['user_id']);
                $this->db->update('tb_users', $params);   
                
        }

        public function del($id)
        {
                $this->db->where('user_id', $id);
                $this->db->delete('tb_users');
        }
        
}
