<?php
	class Service_M extends CI_Model{
        public function service($data){
            if ($data['jenis'] == 'enginer'){
                if($data['Engineering'] == 'tower'){
                    $tabel = 'jasa_teknisi_tower';
                    $param = array(
                        'ukuran_tower' =>$data['customRadio'],
                        'kuantitas_tower' => $data['quanTow'],
                        'lokasi_tower' => $data['locationTow'],
                        'warna_tower' => $data['color'],
                        'tanggal_mulai' => date('Y-m-d',strtotime($data['tanggalTow']))
                    );

                    $temp = 'id_tower';
                }
                elseif ($data['Engineering'] == 'colocation' ){
                    $tabel = 'jasa_teknisi_colocation';
                    $param = array(
                        'kuantitas_colocation' => $data['qtyColo'],
                        'kekuatan_tower' => $data['powColo'],
                        'bandwidth_tower' => $data['bandColo'],
                        'tanggal_mulai' => date('Y-m-d',strtotime($data['tanggalCol']))
                    ); 

                    $temp = 'id_col';
                }
               elseif($data['Engineering'] == 'shelter'){
                    $tabel = 'jasa_teknisi_shelter';
                    $param = array(
                        'kapasitas_shelter' =>$data['pickshelter'],
                        'kuantitas_shelter' => $data['quanShel'],
                        'lokasi' => $data['locationShel'],
                        'tanggal_mulai' => date('Y-m-d',strtotime($data['tanggalShel']))
                    );

                    $temp = 'id_shelter';
                }
                elseif($data['Engineering'] == 'lab'){
                    $tabel = 'jasa_teknisi_laboratorium';
                    $param = array(
                        'kapasitas_lab' =>$data['capLab'],
                        'lapisan_lab' => $data['tierLab'],
                        'tanggal_mulai' => date('Y-m-d',strtotime($data['tanggalLab']))
                    );

                    $temp = 'id_lab';
                }
                
                
            }
            elseif ($data['jenis'] == 'Maintance'){
                if($data['mainselect'] == 'telcom'){
                    $tabel = 'jasa_maintenance_unik';
                    $param = array(
                        'jenis_produk' =>$data['mainselect'],
                        'ac_produk' => $data['AC_main'],
                        'catudaya_produk' => $data['catu_main'],
                        'baterai_produk' => $data['baterai_main'],
                        'komputer_produk' => $data['komputer_main'],
                        'seratoptik_produk' => $data['serat_main']
                    );
                    $temp = 'id_main_unik';
                }

                elseif($data['mainselect'] == 'building'){
                    $tabel = 'jasa_maintenance_general';

                    $param = array(
                        'jenis_jasa' =>$data['mainselect'],
                        'repaint' => $data['main_paint'],
                        'repair' => $data['main_repair'],
                        'restoration' => $data['main_res']
                    );
                    $temp = 'id_main_general';
                }

                
            }
            elseif ($data['jenis'] == 'Unique'){
                if($data['uniqueselect'] == 'scada'){
                    $tabel = 'jasa_maintenance_unik';
                    $param = array(
                        'jenis_produk' =>$data['uniqueselect'],
                        'ac_produk' => $data['ac_unik'],
                        'catudaya_produk' => $data['catu_unik'],
                        'baterai_produk' => $data['baterai_unik'],
                        'komputer_produk' => $data['komputer_unik'],
                        'seratoptik_produk' => $data['serat_unik']
                    );
                    $temp = 'id_main_unik';
                }

                elseif($data['uniqueselect'] == 'gpa'){
                    $tabel = 'jasa_maintenance_general';
                    $param = array(
                        'jenis_jasa' =>$data['uniqueselect'],
                        'repaint' => $data['unik_paint'],
                        'repair' => $data['unik_repair'],
                        'restoration' => $data['unik_res']
                    );
                    $temp = 'id_main_general';
                }

                
            }
            $insert = $this->db->insert($tabel, $param);

            $this->db->select_max('id');
            $res1 = $this->db->get($tabel);

            $res2 = $res1->result_array();
            $result = $res2[0]['id'];

            $param2 = array(
                'id_Cust' => $this->session->userdata('id'),
                'company' => $data['company'],
                $temp => $result
            );
            $insert2 = $this->db->insert('Pemesanan_Jasa', $param2);
            
            if ($insert && $insert2){
					return TRUE;
				}else{
					return FALSE;
				}

        }
    }
    
?>