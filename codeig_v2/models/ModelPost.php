<?php

class ModelPost extends CI_Model
{   
    public function insertPostData()
    {
        $data = array(
            'post_title' => $this->input->post('post_title', TRUE), // True - for XSS validations. Refer code line 435 in config.php
            'post_description' => $this->input->post('post_description', TRUE),
            'fname' => $this->session->userdata('fname'),
            'created_on' => date('Y-m-d'),
        );

        return $this->db->insert('posts',$data); // This returns true
    }
    
    public function fetchAllArticles()
    {
        $resultsQuery = $this->db->query("SELECT * FROM posts;");
        return $resultsQuery->result_array();
    }
}