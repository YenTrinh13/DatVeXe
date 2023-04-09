<?php
defined ('BASEPATH') OR exit ('no');
class DangKy extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this-> load-> helper ('url'); 
    }
    public function Dangky(){
        $this -> load -> view('dangky/index.php');
    }
    public function Add(){
        $tentk = $this->input->post('tentk');
        $hten = $this->input->post('hoten');
        $sdt = $this->input->post('sdt');
        $mail = $this->input->post('mail');
        $date = $this->input->post('ngaysinh');
        $diachi = $this->input->post('diachi');
        $mkhau = $this->input->post('matkhau');
        // echo mt_rand(0, mt_getrandmax())/mt_getrandmax();
        // function mt_random_float($min, $max) {
        //     $float_part = mt_rand(0, mt_getrandmax())/mt_getrandmax();
        //     $integer_part = mt_rand($min, $max - 1);
        //     return $integer_part + $float_part;
        // }
        // // echo mt_random_float(15, 50);
        // $mat = mt_random_float(1, 999);
        // $makh = "KH".(string)$mat."";
        $data = [
            'makh' => $tentk,
            'tenkh' => $hten,
            'sdt' => $sdt,
            'email' => $mail,
            'ngaysinh' => $date,
            'diachi' => $diachi
        ];
        $data2 = [
            'tentk' =>$tentk,
            'pass' => $mkhau,
            'pq' => 'KH'
        ];
        $this->load->model('M_DangKy');
        $this->M_DangKy->addKH($data);
        $this->load->model('M_DangKy');
        $this->M_DangKy->addTK($data2);
        $this -> load -> view('login/index.php');
    }
}
?>