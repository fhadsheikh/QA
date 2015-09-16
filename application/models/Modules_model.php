<?php

class Modules_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getModules(){
        $this->db->select('*');
        $this->db->from('modules');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

}