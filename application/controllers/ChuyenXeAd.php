<?php
defined ('BASEPATH') OR exit ('no');
class ChuyenXeAd extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this->load->helper('url');
    }
    public function viewCX(){
        $this->load->model('M_ChuyenXeAd');
        $data['bens'] = $this->M_ChuyenXeAd->getBXE();
        $data['xes'] = $this->M_ChuyenXeAd->getSoXe();
        $data['taixes'] = $this->M_ChuyenXeAd->getTaiXe();
        $this->load->view('Admin/AddCX.php',$data);
    }
    
    public function AddCX(){
        $this->load->view('Admin/AddCX.php');
        $random_number = rand(1, 999);
        $machuyen = "CX".(string)$random_number."";
        $soxe = $this->input->post('soxe');
        $txe = $this->input->post('taixe');
        $noidi = $this->input->post('noidi');
        $noiden = $this->input->post('noiden');
        $ngay = $this->input->post('ngay');
        $gio = $this->input->post('gio');
        $gia = $this->input->post('gia');
        $data = [
            'machuyen' => $machuyen,
            'soxe' => $soxe,
            'matx' => $txe,
            'noidi' => $noidi,
            'noiden' => $noiden,
            'ngayxuatphat' => $ngay,
            'gioxuatphat' => $gio,
            'gia' => $gia
         ];
         $this->load->model('M_ChuyenXeAd');
         $this->M_ChuyenXeAd->addCX($data);
    }
    public function QLChuyen(){
        $this->load->model('M_ChuyenXeAd');
        $tim = $this->input->post('timkiem');
        $ve = $this->M_ChuyenXeAd->QLChuyen($tim);
        $c2 = $this->M_ChuyenXeAd->Chuyen($tim);
        $count = $this->M_ChuyenXeAd->countVX($tim);//sove
        $c = $this->M_ChuyenXeAd->getAll();//trả ra mã chuyến
        $cl =[];
        $m2 = [];
        foreach($c as $i){
            $con = $i->soxe;// giá trị để truyền
            $test =  $this->M_ChuyenXeAd->ConLai($con);
            for($i = 0; $i < count($test) ; $i++){
                array_push($cl,$test[$i]->socho);
                array_push($m2,$test[$i]->soxe);
            }
        }
        $tt = $this->M_ChuyenXeAd->Dem();
        // foreach($tt as $t){
        //     echo $t->machuyen;
        //     echo $t->total;
        // }
        $data = array(
            've' => $ve,
            't1' => $tt,
            'xe' =>$test,
            'cl' =>$cl,
            'm2'=>$m2,
            'sove' =>$count,// so ve
            'thongtin' => $c

        );
        $this->load->view('Admin/DSChuyen.php',$data);
    }
}
?>