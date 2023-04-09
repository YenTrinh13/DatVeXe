<?php
class M_ChuyenXeAd extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    public function getBXE(){
        $query = $this->db->get('benxe');
        return $query->result();
    }
    public function getSoxe(){
        $query = $this->db->get('xe');
        return $query->result();
    }
    public function QLChuyen($tim) {
        if(!empty($tim)) {
            $this->db->like('machuyen', $tim);
        }
        $query = $this->db->get('vexe');
        return $query->result();
    }
    public function Chuyen($tim) {
        if(!empty($tim)){
            $tim = $this->db->escape_str($tim);
            $this->db->like('machuyen', $tim);
            $query = $this->db->get('chuyenxe');
            return $query->result();
         }
    }
    public function ConLai($con) {
        if(!empty($con)){
            $con = $this->db->escape_str($con);
            $this->db->like('soxe', $con);
            $query = $this->db->get('xe');
            return $query->result();//lay so cho
         }
    }
    public function Dem(){
        $this->db->select('machuyen, COUNT(*) AS total');
        $this->db->from('vexe');
        $this->db->group_by('machuyen');
        $query = $this->db->get();
        return $query->result();
     }
    public function getTaiXe(){
        $query = $this->db->get('taixe');
        return $query->result();
    }
    public function addCX($data) {
        $this->db->insert('chuyenxe', $data);
    }
    public function getAll() {
        $query = $this->db->get('chuyenxe');
        return $query->result();
    }
    public function countVX($tim) {
        $this->db->where('machuyen', $tim);
        $this->db->from('vexe');
        return $this->db->count_all_results(); 
     }
}
?>