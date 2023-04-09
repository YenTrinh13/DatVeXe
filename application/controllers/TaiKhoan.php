<?php
defined ('BASEPATH') OR exit ('no');
class TaiKhoan extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        //$this->load-> model("Taikhoan");
        $this->load->helper('url');
        // $this->load->library("session");
    }
    public function dangnhap(){

        $ten_tk = $this->input->post('ten_tk');
        $pass = $this->input->post('pass');
        $this->load->model('Taikhoan_db');
        $tk = $this->Taikhoan_db->getTKhoan($ten_tk);
        if(!empty($tk)){
            if($pass == $tk[0]->pass){
                if('ad' == $tk[0]->pq){
                    $data['tkhoan'] = $tk;
                    $this -> load -> view('helloworld/TrangChuAd.php',$data);//ad
                }else{
                    $data['tkhoan'] = $tk;
                        $this->load->library('session');
                        $this->session->set_userdata('id', $ten_tk);
                        $data['id']= $this->session->userdata('id');
                    $this -> load -> view('helloworld/index.php',$data);//khachhang
                }
                
            }else{
                $data['ket_qua'] = "mk ko d!";
                $this -> load -> view('login/index.php',$data);
            }
        }else{
            $data['ket_qua'] = "Ten tk ko ton tai!";
            $this -> load -> view('login/index.php',$data);
        }
        
    }
}
?>