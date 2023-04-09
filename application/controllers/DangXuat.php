<?php
defined ('BASEPATH') OR exit ('no');
class DangXuat extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this->load->helper('url');
    }
    public function out(){
        $this->load->library('session');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('machuyen');
        $this->load->view('helloworld/index.php');
    }
}
?>