<?php
defined ('BASEPATH') OR exit ('no');
class HoSo extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this->load->helper('url');
    }
    public function view(){
        $this->load->library('session');
        // $data['id']= $this->session->userdata('id');
        $tim= $this->session->userdata('id');
        $this->load->model('M_HoSo');
        $ma = $this->M_HoSo->HS($tim);
        $data = array(
            'hs' => $ma,
            'id' => $this->session->userdata('id')
        );
        $this->load->view('KhachHang/HoSo.php',$data);
    }
}
?>