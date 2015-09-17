<?php

class Techs_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getTechs(){
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
}