<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {
    
    public function index(){
        $this->allCases();
    }
    
    public function allCases($module = null, $version = '1'){
        $this->load->model('Cases_model','cases');
        $data['workflowCases'] = $this->cases->getWorkflowCases($module,$version);
        $data['settingCases'] = $this->cases->getSettingCases($module,$version);
        
        $data['stats'] = $this->cases->caseStats();
        
        $this->load->model('Modules_model','modules');
        $data['modules'] = $this->modules->getModules();
        
        $this->load->model('Versions_model','versions');
        $data['versions'] = $this->versions->getVersions();
        
        
        $data['v'] = $this->cases->getVersion($version); 
        
        $this->load->view('cases', $data);
    }
    
    public function filter(){
        $module = $this->input->get('module');
        $version = $this->input->get('version');
        
        
        $this->load->model('Cases_model','cases');
        $data['workflowCases'] = $this->cases->getWorkflowCases($module,$version);
        $data['settingCases'] = $this->cases->getSettingCases($module,$version);
        
        $data['stats'] = $this->cases->caseStats($version);
        
        $this->load->model('Modules_model','modules');
        $data['modules'] = $this->modules->getModules();
        
        $this->load->model('Versions_model','versions');
        $data['versions'] = $this->versions->getVersions();
        
        $data['v'] = $this->cases->getVersion($version); 
        
        $this->load->view('cases', $data);
            
    }
    
    public function testcase($id){
        $this->load->model('Cases_model','cases');
        $data['case'] = $this->cases->getCase($id);
        $data['results'] = $this->cases->getResults();
        
        $this->load->model('Techs_model','users');
        $data['techs'] = $this->users->getTechs();
        
        
        $this->load->view('testcase',$data);
    }
    
    public function update($id){
        $tech = $this->input->post('tech');
        $version = $this->input->post('version');
        $result = $this->input->post('result');
        $notes = $this->input->post('notes');
        
        $data = array(
            'testcase_id' => $id,
            'testcase_version' => $version,
            'testcase_tech' => $tech,
            'testcase_result' => $result,
            'testcase_notes' => $notes
        );
        
        $this->load->model('Cases_model','cases');
        $this->cases->update($id,$data);
        
        redirect('cases');
    }
    
    public function import(){
        $this->load->model('Cases_model','cases');
        $filename= 'filename.csv';
        $filename2= 'filename2.csv';
        $delimiter = ',';
        $array = $this->cases->importMasters($filename,$delimiter);
        $array2 = $this->cases->importTests($filename2,$delimiter);
        
        echo "<pre>",print_r($array)."<pre>";
        echo "<pre>",print_r($array2)."<pre>";
        
    }
    
    
}

?>