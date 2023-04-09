<?php
class M_Dat extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function TTCaNhan($tim) {
        $this->db->like('makh', $tim);
        $query = $this->db->get('khachhang');
        return $query->result();
    }
    public function TTChuyen($ma) {
        $this->db->like('machuyen', $ma);
        $query = $this->db->get('chuyenxe');
        return $query->result();
    }
    public function AddVe($data2) {
        $this->db->insert('vexe', $data2);
    }
    // public function getVEXE(){
    //     $query = $this->db->get('vexe');
    //     return $query->result();
    // }
    // public function getCXE(){
    //     $query = $this->db->get('chuyenxe');
    //     return $query->result();
    // }
    // public function Chuyen($tim) {
    //     if($tim){
    //         $tim = $this->db->escape_str($tim);
    //         $this->db->like('machuyen', $tim);
    //         $query = $this->db->get('chuyenxe');
    //         return $query->result();
    //      }
    // }
    // public function ConLai($con) {
    //     if($con){
    //         $con = $this->db->escape_str($con);
    //         $this->db->like('soxe', $con);
    //         $query = $this->db->get('xe');
    //         return $query->result();
    //      }
    // }
    // public function countVX($tim) {
    //     $this->db->where('machuyen', $tim); // Lọc bảng theo group_id = 2
    //     $this->db->from('vexe'); // Bảng sẽ được đếm
    //     return $this->db->count_all_results(); // Đếm số lượng dòng và trả về kết quả
    //  }
    }
?>