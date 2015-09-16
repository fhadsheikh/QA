<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {
    
    public function index(){
        $this->allCases();
    }
    
    public function allCases(){
        $this->load->model('Cases_model','cases');
        $data['workflowCases'] = $this->cases->getWorkflowCases();
        $data['settingCases'] = $this->cases->getSettingCases();
        $data['stats'] = $this->cases->caseStats();
        $this->load->view('cases', $data);
    }
    
    public function testcase(){
        $this->load->view('testcase');
    }
    
}

?>