<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function index(){
        
    }
    
    public function versions($action = null, $id = null){
        if(!$action){
            $this->versions_manage();
        }
        if($action == 'add'){
            $this->versions_add();
        }
        if($action == 'edit'){
            $this->versions_edit($id);
        }
        if($action == 'delete'){
            $this->versions_delete($id);
        }
    }
    
    public function versions_manage(){
        $this->load->model('Versions_model', 'versions');
        $data['versions'] = $this->versions->getVersions();
        $this->load->view('admin_versions_manage', $data);
    }
    
    public function versions_add(){
        $this->load->model('Versions_model', 'versions');
        $data['metas'] = $this->versions->getMeta();
        $this->load->view('admin_versions_add',$data);
    }
    
    public function versions_edit($id){
        $this->load->model('Versions_model','versions');
        $data['components'] = $this->versions->getMeta();
        $data['componentData'] = $this->versions->componentData($id);
        $this->load->view('admin_versions_edit',$data);
        
    }
    
    public function addVersion(){
        $this->load->model('versions_model','version');
        $data = array(
            'version_component' => $this->input->post('component'),
            'version_number' => $this->input->post('version'),
        );
        $this->version->addVersion($data);
        
        redirect('admin/versions');
    }
    
    public function modules($action = null, $id = null){
        if(!$action){
            $this->modules_manage();
        }
    }
    
    public function modules_manage(){
        $this->load->model('Modules_model','modules');
        $data['modules'] = $this->modules->getModules();
        $this->load->view('admin_modules_manage',$data);
    }
    
    public function users($action = null,$id = null){
        if(!$action){
            $this->users_manage();
        }
        if($action == 'add'){
            $this->users_add();
        }
        if($action == 'edit'){
            $this->users_edit($id);
        }
        if($action == 'delete'){
            $this->users_delete($id);
        }
    }
    
    public function users_add(){
        $this->load->model('Users_model','users');
        $data['metas'] = $this->users->getMeta();
        $this->load->view('admin_users_add',$data);
    }
    
    public function users_manage(){
        $this->load->model('Users_model','users');
        $data['users'] = $this->users->getUsers();
        $this->load->view('admin_users_manage', $data);
    }
    
    public function users_edit($id){
        $this->load->model('Users_model','users');
        $data['userData'] = $this->users->userData($id);
        $data['metas'] = $this->users->getMeta();
        $this->load->view('admin_users_edit', $data);
    }
    
    public function users_delete($id){
        $this->load->model('Users_model','users');
        $this->users->deleteUser($id);
        redirect('admin/users');
    }
    
    public function adduser(){
        $this->load->model('Users_model','users');
        $data = array(
            'user_name' => $this->input->post('name'),
            'user_username' => $this->input->post('username'),
            'user_role' => $this->input->post('role'),
            'user_status' => $this->input->post('status')
        );
        $this->users->addUser($data);
        
        redirect('admin/users');
    }
    
    public function edituser($id){
        $this->load->model('Users_model','users');
        $data = array(
            'user_name' => $this->input->post('name'),
            'user_username' => $this->input->post('username'),
            'user_role' => $this->input->post('role'),
            'user_status' => $this->input->post('status')
        );
        $this->users->editUser($data,$id);
        redirect('admin/users');
    }
}

?>