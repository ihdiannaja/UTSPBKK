<?php 

/**
 * Public
 */
class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Products_model', 'Products_model');
		$this->load->model('Home_model', 'Home_model');
		$this->load->model('Elpay_model', 'Elpay_model');

		if(isset($this->session->userdata['token'])){
			$cid = $this->session->userdata['cid'];
			$orderForAcc = $this->Products_model->getOrdersForCust($cid);
		}else{
			$cid = 0;
			$orderForAcc = "";
		}

		$categories = $this->Products_model->getCat();
		$this->load->view('inc/header', [
			'categories' => $categories,
			'orderForAcc' 	=> $orderForAcc
		]);
	}

	public function index(){

		$featuredProd = $this->Products_model->getFeaturedProd();
		$latestProd = $this->Products_model->getLatestProd();
		$forMen = $this->Products_model->getForMen();
		$forWomen = $this->Products_model->getForWomen();
		$forKids = $this->Products_model->getForKids();

		$this->load->view('home', [
			'featuredProd' 	=> $featuredProd,
			'latestProd' 	=> $latestProd,
			'forMen' 		=> $forMen,
			'forWomen' 		=> $forWomen,
			'forKids' 		=> $forKids
		]);
		$this->load->view('inc/footer');
	}

	public function account(){

		if(isset($this->session->userdata['token'])){

			$cid = $this->session->userdata['cid'];

			$custDetail = $this->Home_model->getCustDetail($cid);
			$orderDetail = $this->Home_model->getOrder($cid);
			
			// print_r($custDetail);
			// print_r($orderDetail);

			$data['cn'] = $custDetail->cn;
			$data['ce'] = $custDetail->ce;
			$data['cp'] = $custDetail->cp;
			$data['cadd'] = $custDetail->cadd;
			$data['saldo_elpay'] = $custDetail->saldo_elpay;

			$this->load->view('account',$data + ['order' => $orderDetail]);
			$this->load->view('inc/footer');
			
		}else{
			redirect('home/login','refresh');
		}

	}

	// public function listOrder(){
	// 	if(isset($this->session->userdata['token'])){
	// 		$cid = $this->session->userdata['cid'];
	// 		$orderDetail = $this->Home_model->getOrder($cid);
	// 		$this->load->view('account', ['orders' => $orderDetail]);
	// 	}
	// 	else{
	// 		redirect('home/login','refresh');
	// 	}
	// }
	
	public function login(){
		
		$this->load->view('login');
		$this->load->view('inc/footer');
	}

	public function register(){
		
		$this->load->view('register');
		$this->load->view('inc/footer');
	}

	public function signin(){

		// print_r($this->input->post());

		$lce = $this->input->post('lce');
		$lcpwd = md5($this->input->post('lcpwd'));

		$this->form_validation->set_rules('lce', 'Email', 'required');
		$this->form_validation->set_rules('lcpwd', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
            $this->login();
        } else {

        	$custData = $this->Home_model->signinData($lce, $lcpwd);
    		if ($custData) {
    			$session_data = array(
    				'token' => $lce.$lcpwd,
    				'cid' => $custData->id
    			);
    			$this->session->set_userdata( $session_data );
    			redirect('home/account','refresh');
    			// echo 'success';
    		} else {
    			$this->session->set_flashdata('error', 'Invalid email/Password');
    			redirect('home/login','refresh');
    		}
            
        }

	}

	public function signup(){
		$cn = $this->input->post('cn');
		$ce = $this->input->post('ce');
		$cpwd = $this->input->post('cpwd');
		$ccpwd = $this->input->post('ccpwd');

		$this->form_validation->set_rules('cn', 'Name', 'required');
		$this->form_validation->set_rules('ce', 'Email', 'required|valid_email|is_unique[customers.ce]');
		$this->form_validation->set_rules('cpwd', 'Password', 'required');
		$this->form_validation->set_rules('ccpwd', 'Password Confirmation', 'required|matches[cpwd]');
		$this->form_validation->set_message('is_unique', 'This Email Id is already registered. Please login to continue.');

		if ($this->form_validation->run() == FALSE) {
            $this->register();
        } else {
            
        	$data = [
        		'cn' => $cn,
        		'ce' => $ce,
        		'cpwd' => md5($cpwd)
        	];
            
        	$last_id = $this->Home_model->signupData($data);
            if ($last_id) {

            	$array = array(
            		'logged_in' => 'yes'
            	);
            	
            	$this->session->set_userdata( $array );
            	
            	$this->session->set_flashdata('signupsuccess', 'Registration successfull. Login to continue.');

            	redirect('home/login');

            }

        }
		
	}

	public function logout(){
		$this->session->unset_userdata('token');
		redirect('home/login','refresh');
	}

	public function topup(){
		$nominal = $this->input->post('nominal');
		$metode = $this->input->post('metode');
		$cid = $this->session->userdata['cid'];

		$data = [
			'cid' => $cid,
			'jenis_transaksi' => 'Top Up',
			'metode' => $metode,
			'nilai' => $nominal,
			'status' =>'Belum dibayar'

		];

		$order = $this->Elpay_model->topup_saldo($data);

		if($order){
			$this->load->view('order_sukses');
		}
		
		// $this->load->view('inc/footer');
	}

	public function topup_view(){
		$this->load->view('top_up');
	}
	// public function topup_sukses(){
		
	// 	$this->load->view('order_sukses');
	// 	// $this->load->view('inc/footer');
	// }

}