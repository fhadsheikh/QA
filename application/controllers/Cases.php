<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {
    
    public function index(){
        $this->load->view('cases');
    }
    
    public function testcase(){
        $this->load->view('testcase');
    }
    
}

?>