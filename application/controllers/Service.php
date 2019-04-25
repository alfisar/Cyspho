<?php
class Service extends CI_Controller{
    public function __construct(){
        parent::__construct();
            $this->load->model('Service_M');
            $this->load->helper('url');
            $this->load->library('javascript');
            
    }    
    public function index(){
        $this->load->view('service');
    }
    public function data_service(){
        $data = $this->input->post(null,True);
        $insert = $this->Service_M->service($data);
        if($insert){
            redirect('Landing/index');
        }else{
            echo "<script>alert('Gagal Daftar');</script>";
        }
    }
}