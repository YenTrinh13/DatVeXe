<?php
class Taikhoan_db extends CI_Model {
    public function getAll() {
        $query = $this->db->get('taikhoan');
        return $query->result();
    }
    public function getTKhoan($id){
        $this->db->where('tentk', $id);
        $query = $this->db->get('taikhoan');
        return $query->result();
    }
    public function chitietTK($tentk) {
        $this->db->where('tentk', $tentk);
        $query = $this->db->get('taikhoan');
        return $query->row_array();
      }
}

?>