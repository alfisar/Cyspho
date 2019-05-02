<?php
class History extends CI_Controller{
    public function __construct(){
        parent::__construct();
            $this->load->model('History_M');
            $this->load->helper('url');
            $this->load->library('javascript');
            
    }    
    public function index(){
        $data = $this->History_M->history();
        $this->load->view('history',$data);
    }
}