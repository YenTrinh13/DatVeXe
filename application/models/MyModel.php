<?php
class MyModel extends CI_Model {
    public function getAll() {
        $query = $this->db->get('xe');
        return $query->result();
    }
    public function getCXE(){
        $query = $this->db->get('chuyenxe');
        return $query->result();
    }
    public function chitiet($ma) {
        $this->db->where('machuyen', $ma);
        $query = $this->db->get('chuyenxe');
        return $query->row_array();
      }
    public function CTBen($maben){
        $this->db->where('maben', $maben);
        $query = $this->db->get('benxe');
        return $query->row_array();
    }
    public function Soxe($so) {
        if($so){
            $so = $this->db->escape_str($so);
            $this->db->like('soxe', $so);
            $query = $this->db->get('xe');
            return $query->row_array();
         }
    }
    public function countVX($ve) {
        $this->db->where('machuyen', $ve);
        $this->db->from('vexe');
        return $this->db->count_all_results();
    }
    public function getAllBX() {
        $query = $this->db->get('benxe');
        return $query->result();
    }
}

?>