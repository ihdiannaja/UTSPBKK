<?php

    class Elpay extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model('Elpay_model', 'Elpay_model');
        }
        
        public function topup_success(){
		
            $this->load->view('order_success');
            // $this->load->view('inc/footer');
        }
        
        // public function list_transaksi(){
        //     $transaksi = $this->Elpay_model->lihatTransaksi();
        //     print_r($transaksi);

        //     $this->load->view('admin/transaksi_elpay', ['transaksi' => $transaksi]);
        // }
    }