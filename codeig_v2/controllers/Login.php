<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function loginUser(){

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('Login');
        }
        else 
        {

            $this->load->model('ModelUser');
            $result = $this->ModelUser->LoginUser();

            if ($result != false){

                $user_data = array(
                    'user_id'=>$result->id,
                    'fname'=>$result->fname,
                    'lname'=>$result->lname,
                    'email'=>$result->email,
                    'loggedin'=>TRUE
                );

                $this->session->set_userdata($user_data);
                //print_r($_SESSION);
                $this->session->set_flashdata('welocme','Welcome back');
                redirect('Home/index');

            }else{

                $this->session->set_flashdata('errmsg','Wrong email and password');
                redirect('Home/Login');
            }
        }
    }
}