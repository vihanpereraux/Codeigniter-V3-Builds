<?php

class ModelUser extends CI_Model
{
    public function insertUserData()
    {
        $data = array(
            'fname' => $this->input->post('fname',TRUE), // True - for XSS validations. Refer code line 435 in config.php
            'lname' => $this->input->post('lname',TRUE),
            'email' => $this->input->post('email',TRUE),
            'password' => sha1($this->input->post('password',TRUE)),
        );
        // print_r($data);
        // die();

        return $this->db->insert('persons',$data); // This returns true
    }
}