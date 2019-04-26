<?php
class History extends CI_Controller{
    public function __construct(){
        parent::__construct();
            // $this->load->model('');
            $this->load->helper('url');
            $this->load->library('javascript');
            
    }    
    public function index(){
        $this->load->view('history');
    }
}