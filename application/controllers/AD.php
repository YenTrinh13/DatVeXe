<?php
defined ('BASEPATH') OR exit ('no');
class AD extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this->load->helper('url');
    }
    public function view(){
        $this->load->view('Admin/AD.php');
    }
}
?>