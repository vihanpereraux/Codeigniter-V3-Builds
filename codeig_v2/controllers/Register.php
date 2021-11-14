<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function registerUser()
    {
        $this->form_validation->set_rules('fname', 'First name', 'required');
        $this->form_validation->set_rules('lname', 'Last name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[persons.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm password', 'required|matches[password]');

        /* Checking the rules */
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('register');
        }
        else
        {
             $this->load->model('ModelUser');
             $response = $this->ModelUser->insertUserData();
             if($response)
             {
                 $this->session->set_flashdata('msg', 'Registered Successfully, Please Login !');
                 redirect('Home/index');
             }
             else
             {
                 $this->session->set_flashdata('msg', 'Something went wrong');
                 redirect('Home/register');
             }
        }
    }
}