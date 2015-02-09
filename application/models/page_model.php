<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Page_model extends CI_Model {
    
    function getAllPages(){
        
        $q = $this->db->get('tbl_pages');        
        $page_data = array();
        
        if($q->num_rows() > 0){
             foreach($q->result() as $row){
                $page_data[] = $row;
            }
        }

        return $page_data;
                
    }
}
