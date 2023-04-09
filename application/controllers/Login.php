<?php
defined ('BASEPATH') OR exit ('no');
class Login extends CI_Controller{
    public function __construct () { 
        parent :: __construct (); 
        $this-> load-> helper ('url'); 
    }
    public function DangNhap(){
        $this -> load -> view('login/index.php');
    }
}
?>