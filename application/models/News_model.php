<?php  

class News_model extends CI_Model{

    public function insert_news($data){
        $this->db->insert('news', $data);
    }

    public function update_news($id, $data){
        $this->db->where('n_id', $id)->update('news', $data);
    }
    
    public function delete_news_from_id($id){
        $this->db->where('n_id', $id)->delete('news');
    }

    public function get_all_news(){
        return $this->db
            ->where('n_creator_id',$_SESSION['admin_login_id'])
            ->order_by('n_id', 'DESC')
            // ->join('admin', 'admin.a_id = news.n_creator_id', 'left')
            ->join('admin', 'admin.a_id = news.n_updater_id', 'left')
            ->get('news')->result_array();
    }

    public function get_single_news($id){
        return $this->db
        ->where('n_id',$id)
        ->join('admin', 'admin.a_id = news.n_creator_id', 'left')
        ->get('news')->row_array();

    }

    public function get_all_categories(){
        return $this->db->get('category')->result_array();
    }

}