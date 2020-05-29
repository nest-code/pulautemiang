<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categoryarticle_m extends CI_Model{

    public function get($id = null)
    {
            $this->db->from('tb_category_articles');
            if($id !=null) {
            $this->db->where('c_article_id', $id);
            }
            $query = $this->db->get();
            return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['c_article_name'],
        ];
        $this->db->insert('tb_category_articles', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['c_article_name'],
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->where('c_article_id', $post['id']);
        $this->db->update('tb_category_articles', $params);
    }

    
    public function del($id)
    {
        $this->db->where('c_article_id',$id);
        $this->db->delete('tb_category_articles');
    }

}