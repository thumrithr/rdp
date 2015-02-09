<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pagecontrol extends CI_Controller {
    
    function index(){
        $this->load->model('page_model');
        $res_data['records'] = $this->page_model->getAllPages();
        
        $this->load->view('page_list',$res_data);                
    }
}


