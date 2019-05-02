<?php
class Service extends CI_Controller{
    public function __construct(){
        parent::__construct();
            $this->load->model('Service_M');
            $this->load->model('Customer_M');
            $this->load->helper('url');
            $this->load->library('javascript');
            
    }    
    public function index(){
        $cust = 'CS-001';
        $temp = $this->Customer_M->data($cust);
        $sess_data = array(
                'logged_in' => "Sudah Login",
                'id' => $temp->idCust,
                'level' => "Customer"
            );
        $this->session->set_userdata($sess_data);
        $data = array(
            'customer' => $temp
        );

        $this->load->view('service',$data);
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