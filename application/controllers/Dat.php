<?php
defined ('BASEPATH') OR exit ('no');
class Dat extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this->load->helper('url');
    }

    public function AddVe(){
        $this->load->library('session');
        $tim = $this->session->userdata('id');
        if(isset($tim) && !empty($tim)){
            $this->load->model('M_Dat');
            $ma = $this->session->userdata('machuyen');
            $c = $this->M_Dat->TTCaNhan($tim);
            $c2 = $this->M_Dat->TTChuyen($ma);
            $random_number = rand(1, 999);
            $sove = "SV".(string)$random_number."";
            foreach($c as $ten){
                $tenkh = $ten->tenkh;
            }
            foreach($c2 as $mach){
                $mac = $mach->machuyen;
            }
            $data2 = [
                'sove' => $sove,
                'makhach' => $tenkh,
                'machuyen' => $mac,
            ];
            $data = array(
                'thongtin' => $c,
                'chuyen' => $c2,
            );
            $this->M_Dat->AddVe($data2);
            $this->load->view('KhachHang/Dat.php',$data);
        }
        else{
            echo "<script src='js/jquery1.3.2/jquery.min.js'>
            </script><script type='text/javascript'>alert('Vui lòng đăng nhập trước khi đặt vé xe');</script>";
            $this->load->view('login/index.php');
        }
    }
}
?>