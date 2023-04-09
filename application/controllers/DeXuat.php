<?php
defined ('BASEPATH') OR exit ('no');
class DeXuat extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this->load-> model("MyModel");
        $this->load->helper('url');
    }
    public function dexuat(){
        $this->load->model('MyModel');
        $data['chuyens'] = $this->MyModel->getCXE();
        $this->load->library('session');
        $data['id']= $this->session->userdata('id');
        $this -> load -> view('dexuat/dexuat.php',$data);
    }
    public function ChiTiet($ma){
        $chuyenxe = $this->MyModel-> chitiet($ma);
        $data['chuyenxe'] = $chuyenxe;
        $noidi = $this->MyModel-> CTBen($chuyenxe['noidi']);
        $noiden = $this->MyModel-> CTBen($chuyenxe['noiden']);
        $data['noidi'] = $noidi;
        $data['noiden'] = $noiden;
        $ve = $chuyenxe['machuyen'];
        $so = $chuyenxe['soxe'];
        $count = $this->MyModel->countVX($ve);
        $so2 = $this->MyModel->Soxe($so);
        $data['socho'] = $so2;
        $data['sove'] = $count;
        $this->load->library('session');
        $data['id'] = $this->session->userdata('id');
        $this->session->set_userdata('machuyen', $chuyenxe['machuyen']);
        $data['mac']= $this->session->userdata('machuyen');
        $this -> load -> view('dexuat/chitiet.php',$data);
    }
    // public function test(){
    //     $this->load->library('session');
    //     $data['id']= $this->session->userdata('id');
    //     $data['mac']= $this->session->userdata('machuyen');
    //     // echo $data['mac'];
    //     $this -> load -> view('test.php',$data);
    // }
}
?>