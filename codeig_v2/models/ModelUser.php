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

    // public function loginUser()
    // {
    //     $email = $this->input->post('email');
    //     $password = sha1($this->input->post('password'));
        
    //     $this->db->where('email', email); //puting a where clause and checking whether it's available
    //     $this->db->where('password', password);
    //     $respond = $this->db->get('persons'); // checking on users table
    //     return $respond->row(0);
    // }

    function loginUser(){

        $email =  $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $this->db->where('email',$email);
        $this->db->where('password',$password);

        $respond = $this->db->get('persons');
        if ($respond->num_rows()==1){
            return $respond->row(0);  

        }else{
            return false;
        }
    }
}