<?php 
class M_DangKy extends CI_Model{
    public function AddKH($data){
        $this->db->insert('khachhang',$data);
    }
    public function AddTK($data2){
        $this->db->insert('taikhoan',$data2);
    }
    public function __construct() {
        $this->load->database();
    }
}
?>