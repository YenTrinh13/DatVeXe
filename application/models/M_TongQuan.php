<?php
class M_TongQuan extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function getVEXE(){
        $query = $this->db->get('vexe');
        return $query->result();
    }
    public function getCXE(){
        $query = $this->db->get('chuyenxe');
        return $query->result();
    }
     public function Dem(){
        $this->db->select('machuyen, COUNT(*) AS total');
        $this->db->from('vexe');
        $this->db->group_by('machuyen');
        $query = $this->db->get();
        return $query->result();
     }
     function get_data_by_month($year, $month) {
        $this->db->select('*');
        $this->db->from('chuyenxe');
        $this->db->where('YEAR(ngayxuatphat)', $year);
        $this->db->where('MONTH(ngayxuatphat)', $month);
        $query = $this->db->get();
        return $query->result();
    }
    
    }
?>