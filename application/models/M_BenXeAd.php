<?php
class M_BenXeAd extends CI_Model {
    public function getAll() {
        $query = $this->db->get('benxe');
        return $query->result();
    }
    public function getCXE(){
        $query = $this->db->get('chuyenxe');
        return $query->result();
    }
    public function __construct() {
        $this->load->database();
    }
    public function addBX($data) {
            $this->db->insert('benxe', $data);
        }
    }
?>