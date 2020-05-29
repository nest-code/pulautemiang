<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article_m extends CI_Model{

    public function get($id = null)
    {
        $this->db->select('tb_articles.*, tb_category_articles.name as category_name');
        $this->db->from('tb_articles');
        $this->db->join('tb_category_articles','tb_category_articles.c_article_id  = tb_articles.c_article_id ');

 
        if($id !=null) {
        $this->db->where('article_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'title' => $post['title'],
            'c_article_id' => $post['cac'],
            'text' => $post['text'],
            
        ];
        $this->db->insert('tb_articles', $params);
    }

    public function edit($post)
    {

        $params = [
            'title' => $post['title'],
            'c_article_id' => $post['cac'],
            'text' => $post['text'],
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->where('article_id', $post['id']);
        $this->db->update('tb_articles', $params);

        
    }

    
    public function del($id)
    {
        $this->db->where('article_id',$id);
        $this->db->delete('tb_articles');
    }

}