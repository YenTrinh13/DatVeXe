<?php
defined ('BASEPATH') OR exit ('no');
class BenXeAd extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        // $this->load-> model("MyModel");
        $this->load->helper('url');
    }
    public function viewBX(){
        $this->load-> model("M_BenXeAd");
        $data['ben'] = $this->M_BenXeAd->getAll();
        $this->load->view('Admin/AddBX.php',$data);
    }
    public function AddBX(){
        $random_number = rand(1, 999);
        $this->load-> model("M_BenXeAd");
        $data['ben'] = $this->M_BenXeAd->getAll();
        $maben = "B".(string)$random_number."";
        $ten = $this->input->post('tenben');
        $kdo = $this->input->post('kdoben');
        $vdo = $this->input->post('vdoben');
        $data2 = [
            'maben' => $maben,
            'tenben' => $ten,
            'kinhdo' => $kdo,
            'vido' => $vdo
         ];
         $this->load->model('M_BenXeAd');
         $this->M_BenXeAd->addBX($data2);
         $this->load->view('Admin/AddBX.php',$data);
    }
    // public function CTBen(){
        
    // }
}
?>