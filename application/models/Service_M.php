<?php
	class Service_M extends CI_Model{
        public function service($data){
            if ($data['jenis'] == 'enginer'){
                $param = array(
                    'product' =>$data['Engineering'],
                    'product_information' => $data['customRadio'],
                    'Quantity' => $data['quan'],
                    'color' => $data['color'],
                    'tanggal' => $data['tanggal']
                );
                echo $data['tanggal'];
                echo ' ';
                echo $data['color'];
                echo ' ';
                echo $data['quan'];
                echo ' ';
                echo $data['customRadio'];
                echo ' ';
                echo $data['Engineering'];
            }
        }
    }
    
?>