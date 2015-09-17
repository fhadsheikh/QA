<?php

class Versions_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getVersions(){
        $this->db->select('*');
        $this->db->from('versions');
        $this->db->join('components', 'components.component_id = versions.version_component');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function getMeta(){
        $this->db->select('*');
        $this->db->from('components');
        $query = $this->db->get();
        $metas = $query->result();
        return $metas;
    }
    
    public function componentData($id){
        $this->db->select('*');
        $this->db->from('components');
        $this->db->join('versions', 'versions.version_component = components.component_id');
        $this->db->where('version_id',$id);
        $query = $this->db->get();
        $componentData = $query->row();
        return $componentData;
    }
    
    public function addVersion($data){
        $this->db->insert('versions',$data);
        
        $version = $this->input->post('version');
        $this->db->select('*');
        $this->db->from('versions');
        $this->db->where('version_number',$version);
        $query = $this->db->get();
        $result = $query->row();
        $version_id = $result->version_id;
            
        $this->copyCases($version_id);
        redirect('cases');
    }
    
    
    
    public function copyCases($version_id){
        $this->db->select('*');
        $this->db->from('mastercases');
        $query = $this->db->get();
        $masterCases = $query->result();
        
        foreach($masterCases as $masterCase){
            $data = array(
                'testcase_version' => $version_id,
                'testcase_mastercase' => $masterCase->mastercase_id
            );
            
            $this->db->insert('testcases',$data);
            
        }
        
    }
}