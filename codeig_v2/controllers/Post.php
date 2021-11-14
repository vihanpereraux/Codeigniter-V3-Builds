<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller 
{
    public function uploadPost()
    {
        $this->form_validation->set_rules('post_title', 'Post title', 'required');
        $this->form_validation->set_rules('post_description', 'Post title', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('home');
        }
        else
        {
            $this->load->model('ModelPost');
            $response = $this->ModelPost->insertPostData();
            if($response)
            {
                $this->session->set_flashdata('msg', 'Post uploaded successfully!');
                redirect('Home/index');
            }
            else
            {
                $this->session->set_flashdata('msg', 'Something went wrong!');
                redirect('Home/index');
            }
        }
    }
}