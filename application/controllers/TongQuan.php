<?php
defined ('BASEPATH') OR exit ('no');
class TongQuan extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this->load->helper('url');
    }
    public function viewTQ(){
        $this->load->model('M_TongQuan');
        $mang = array();
        for ($i = 1; $i <= 12; $i++) {
            $year = '2023';
            $month = $i;
            $dem = 0;
            $data3 = $this->M_TongQuan->get_data_by_month($year, $month);
            foreach($data3 as $a){
                $dem++;
            } 
            $mang[] = $dem;
        }
        // for ($i = 0; $i < count($mang); $i++) {
        //     echo $mang[$i];
        // }
            $this->load->database();
            $SLben = $this->db->count_all_results('benxe');
            $SLcxe = $this->db->count_all_results('chuyenxe');
            $SLxe = $this->db->count_all_results('xe');
            $SLtxe = $this->db->count_all_results('taixe');
            $data = array(
                'slben' => $SLben,
                'slcxe' =>$SLcxe,
                'slxe' => $SLxe,
                'sltxe' => $SLtxe,
                'dem' => $dem,
                'mang' =>$mang
            );
        $this->load->view('Admin/TongQuan.php',$data);
    }
}
?>