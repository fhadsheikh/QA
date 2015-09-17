<?php

class Cases_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getWorkflowCases($module,$version){
        $this->db->select('*');
        $this->db->from('testcases');
        $this->db->join('mastercases', 'mastercases.mastercase_id = testcases.testcase_mastercase');
        $this->db->join('results', 'results.result_id = testcases.testcase_result');
        $this->db->join('modules', 'modules.module_id = mastercases.mastercase_module');
        $this->db->join('users', 'users.user_id = testcases.testcase_tech');
        $this->db->where('mastercase_casetype',1);
        if($module != ""){
            $this->db->where('mastercase_module',$module);
        }
        if($version != ""){
            $this->db->where('testcase_version',$version);
        }
        $query = $this->db->get();
        $workflowCases = $query->result();
        return $workflowCases;
    }
    
    public function getSettingCases($module,$version){
        $this->db->select('*');
        $this->db->from('testcases');
        $this->db->join('mastercases', 'mastercases.mastercase_id = testcases.testcase_mastercase');
        $this->db->join('results', 'results.result_id = testcases.testcase_result');
        $this->db->join('modules', 'modules.module_id = mastercases.mastercase_module');
        $this->db->join('users', 'users.user_id = testcases.testcase_tech');
        $this->db->where('mastercase_casetype',2);
        if($module != ""){
            $this->db->where('mastercase_module',$module);
        }
        if($version != ""){
            $this->db->where('testcase_version',$version);
        }
        $query = $this->db->get();
        $settingCases = $query->result();
        return $settingCases;
    }
    
    public function getCase($id){
        $this->db->select('*');
        $this->db->from('testcases');
        $this->db->join('mastercases', 'mastercases.mastercase_id = testcases.testcase_mastercase');
        $this->db->join('results', 'results.result_id = testcases.testcase_result');
        $this->db->join('modules', 'modules.module_id = mastercases.mastercase_module');
        $this->db->join('users', 'users.user_id = testcases.testcase_tech');
        $this->db->join('versions', 'versions.version_id = testcases.testcase_version');
        $this->db->join('components','components.component_id = versions.version_component');
        $this->db->where('testcase_id',$id);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    
    public function getResults(){
        $this->db->select('*');
        $this->db->from('results');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function getVersion($version){
        $this->db->select('*');
        $this->db->from('versions');
        $this->db->where('version_id',$version);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
        
    }
    
    public function update($id,$data){
        $this->db->set($data);
        $this->db->where('testcase_id',$id);
        $this->db->update('testcases');
    }
    
    public function caseStats($version = '1'){
        $this->db->select('*');
        $this->db->from('testcases');
        $this->db->where('testcase_version',$version);
        $query = $this->db->get();
        $caseStats = $query->result();
        
        $p = 0;
        $f = 0;
        $u = 0;
        
        foreach($caseStats as $caseStat){
            if($caseStat->testcase_result == 1){
                $p++;
            }
            if($caseStat->testcase_result == 2){
                $f++;
            }
            if($caseStat->testcase_result == 0){
                $u++;
            }
        }
        
        $total = $p + $f + $u;
        if($total == 0){$total = 1;}
        $pp = $p * 100 / $total;
        $pf = $f * 100 / $total;
        $pu = $u * 100 / $total;
        
        $stats['pass'] = $pp;
        $stats['fail'] = $pf;
        $stats['untested'] = $pu;
        
        return $stats;
        
    }
}