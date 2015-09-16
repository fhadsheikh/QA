<?php

class Users_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getUsers(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('roles', 'roles.role_id = users.user_role');
        $this->db->join('statuses', 'statuses.status_id = users.user_status');
        $query = $this->db->get();
        $users = $query->result();
        return $users;
    }
    
    public function getMeta(){
        $this->db->select('*');
        $this->db->from('roles');
        $this->db->join('statuses', 'statuses.status_id = roles.role_id','left');
        $query = $this->db->get();
        $metas = $query->result();
        return $metas;
    }
    
    public function addUser($data){
        $this->db->insert('users',$data);
    }
    
    public function editUser($data,$id){
        
        $this->db->set($data);
        $this->db->where('user_id',$id);
        $this->db->update('users');
    }
    
    public function deleteUser($id){
        $this->db->where('user_id',$id);
        $this->db->delete('users');
    }
    
    public function userData($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id',$id);
        $query = $this->db->get();
        $userData = $query->row();
        return $userData;
        
        
    }
}