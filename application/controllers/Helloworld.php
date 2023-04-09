<?php
defined ('BASEPATH') OR exit ('no');
class Helloworld extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this-> load-> helper ('url'); 
    }
    public function index(){
        $this->load->model('MyModel');
        $data['records'] = $this-> MyModel->getAll();
        $data['ben'] = $this->MyModel->getAllBX();
        $this->load->library('session');
        $data['id']= $this->session->userdata('id');
        $this -> load -> view('helloworld/index.php',$data);
    }
    
}
?>