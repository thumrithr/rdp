<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Email extends CI_Controller{
    function __construct() {
         parent::__construct();
    }
    
    function index(){
        $this->load->view('newsletter');
    }
    
    function sendemail(){
        
        $this->load->library('form_validation');
        
        // field name, error message validation rules
        
        $this->form_validation->set_rules('name','Name', 'trim|required');
        $this->form_validation->set_rules('email','Email Address', 'trim|required|valid_email');
        
        if($this->form_validation->run()== FALSE){
            
            $this->load->view('newsletter');        
            
        }  else {
            
            // validation passed
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'thumrithr@gmail.com',
                'smtp_password' => 'yyxtnhtbcxfnxqla'
            );
            $this->load->library('email');
            $this->load->library('email',$config);

            $this->email->set_newline("\r\n");

            $this->email->from('thumrithr@gmail.com','thumrith');
            $this->email->to($email);
            $this->email->subject('test email');
            $this->email->message('its working');

            // attaching file
            $path = $this->config->item('server_root');
            $file = $path.'rdp/attachments/sample_attachment.txt';

            $this->email->attach($file);
            // attaching file

            if($this->email->send()){
                echo 'done';
            }else{
                show_error($this->email->print_debugger());
            }
        }
        
        
    }
}