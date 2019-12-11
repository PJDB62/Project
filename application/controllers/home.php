<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$this->load->model('Product_model');
		$product = $this->Product_model->get_data();
		$data['product']=$product;
		$data['temp']='site/home/index';
		$this->load->view('site/layout',$data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */