<?php
class M_HoSo extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function HS($tim) {
        $this->db->like('makh', $tim);
        $query = $this->db->get('khachhang');
        return $query->result();
        }
    }
?>