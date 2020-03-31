<?php

    class elpay_model extends CI_Model{

        public function lihatSaldo($id){
            if($id != 0){
                $this->db->where('customers.id', $id);
                $this->db->select('customers.saldo_elpay');
                $this->db->from('customers');

                $res = $this->db->get();
                return $res->result();
            }
        }

        public function topup_Saldo($data){
            $this->db->insert('transaksi_elpay', $data);
            return $this->db->insert_id();
        }

        public function lihatTransaksi(){
            $this->db->select('*');
            $this->db->from('transaksi_elpay');

            $res = $this->db->get();
            return $res->result();
        }

        public function updateElpay($id, $nominal){
            $this->db->set('saldo_elpay', $nominal);
            $this->db->where('id', $id);
            return $this->db->update('customers');
        }


    }