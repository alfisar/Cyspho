<?php
	class Customer_M extends CI_Model{
		public function data($cust){
			$this->db->where('idCust',$cust);

			$result = $this->db->get('customer');
			if($result->num_rows()==1){
				return $result->row(0);
			}else{
				return false;
			}
		}
}