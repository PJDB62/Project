<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
		$data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */