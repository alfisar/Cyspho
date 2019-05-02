<?php
	class History_M extends CI_Model{
        public function history(){
            $idCust = $this->session->userdata('id');
            
            $query = $this->db->query('select jasa_teknisi_tower.id, tanggal_mulai from Pemesanan_Jasa join jasa_teknisi_tower on Pemesanan_Jasa.id_tower = jasa_teknisi_tower.id where id_Cust="'.$idCust.'"');
            $datas['datas'] = array();
            foreach ($query->result_array() as $k){
                $data['id'] = 'TOWER-'.$k['id'];
                $data['date'] = $k['tanggal_mulai'];
                $data['type'] = 'tower';
                array_push($datas['datas'], $data);
            }
            
            $query = $this->db->query('select jasa_teknisi_shelter.id, tanggal_mulai from Pemesanan_Jasa join jasa_teknisi_shelter on Pemesanan_Jasa.id_shelter = jasa_teknisi_shelter.id where id_Cust="'.$idCust.'"');;
            foreach ($query->result_array() as $k){
                $data['id'] = 'SHELTER-'.$k['id'];
                $data['date'] = $k['tanggal_mulai'];
                $data['type'] = 'shelter';
                array_push($datas['datas'], $data);
            }
            
            $query = $this->db->query('select jasa_teknisi_laboratorium.id, tanggal_mulai from Pemesanan_Jasa join jasa_teknisi_laboratorium on Pemesanan_Jasa.id_lab = jasa_teknisi_laboratorium.id where id_Cust="'.$idCust.'"');
            foreach ($query->result_array() as $k){
                $data['id'] = 'LAB-'.$k['id'];
                $data['date'] = $k['tanggal_mulai'];
                $data['type'] = 'laboratorium';
                array_push($datas['datas'], $data);
            }
            
            $this->db->query('select jasa_teknisi_colocation.id, tanggal_mulai from Pemesanan_Jasa join jasa_teknisi_colocation on Pemesanan_Jasa.id_col = jasa_teknisi_colocation.id where id_Cust="'.$idCust.'"');
            foreach ($query->result_array() as $k){
                $data['id'] = 'COLOCATION-'.$k['id'];
                $data['date'] = $k['tanggal_mulai'];
                $data['type'] = 'Colocation';
                array_push($datas['datas'], $data);
            }
            
            $query = $this->db->query('select jasa_maintenance_unik.id, jenis_produk from Pemesanan_Jasa join jasa_maintenance_unik on Pemesanan_Jasa.id_main_unik = jasa_maintenance_unik.id where id_Cust="'.$idCust.'"');
            foreach ($query->result_array() as $k){
                $data['id'] = 'UNIK-'.$k['id'];
                $data['date'] = 'N/A';
                $data['type'] = $k['jenis_produk'];
                array_push($datas['datas'], $data);
            }
            
            $query = $this->db->query('select jasa_maintenance_general.id, jenis_jasa from Pemesanan_Jasa join jasa_maintenance_general on Pemesanan_Jasa.id_main_general = jasa_maintenance_general.id where id_Cust="'.$idCust.'"');
            foreach ($query->result_array() as $k){
                $data['id'] = 'GENERAL-'.$k['id'];
                $data['date'] = 'N/A';
                $data['type'] = $k['jenis_jasa'];
                array_push($datas['datas'], $data);
            }
            return $datas;
        }
    }
    
?>