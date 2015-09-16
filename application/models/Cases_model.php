<?php

class Cases_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getWorkflowCases(){
        $this->db->select('*');
        $this->db->from('testcases');
        $this->db->join('mastercases', 'mastercases.mastercase_id = testcases.testcase_mastercase');
        $this->db->join('results', 'results.result_id = testcases.testcase_result');
        $this->db->join('modules', 'modules.module_id = mastercases.mastercase_module');
        $this->db->join('users', 'users.user_id = testcases.testcase_tech');
        $this->db->where('mastercase_casetype',1);
        $query = $this->db->get();
        $workflowCases = $query->result();
        return $workflowCases;
    }
    
    public function getSettingCases(){
        $this->db->select('*');
        $this->db->from('testcases');
        $this->db->join('mastercases', 'mastercases.mastercase_id = testcases.testcase_mastercase');
        $this->db->join('results', 'results.result_id = testcases.testcase_result');
        $this->db->join('modules', 'modules.module_id = mastercases.mastercase_module');
        $this->db->join('users', 'users.user_id = testcases.testcase_tech');
        $this->db->where('mastercase_casetype',2);
        $query = $this->db->get();
        $settingCases = $query->result();
        return $settingCases;
    }
    
    public function caseStats(){
        $this->db->select('*');
        $this->db->from('testcases');
        $this->db->where('testcase_version',1);
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
            if($caseStat->testcase_result == 3){
                $u++;
            }
        }
        
        $total = $p + $f + $u;
        $pp = $p * 100 / $total;
        $pf = $f * 100 / $total;
        $pu = $u * 100 / $total;
        
        $stats['pass'] = $pp;
        $stats['fail'] = $pf;
        $stats['untested'] = $pu;
        
        return $stats;
        
    }
}