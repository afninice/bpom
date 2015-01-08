<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jabatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('sess_login') != TRUE) {
		 	redirect('auth','refresh');
		}
	}

	function index()
	{
		$data['page'] = 'setting/jabatan_view';
		$this->load->view('template',$data);
	}

}

/* End of file jabatan.php */
/* Location: ./application/controllers/jabatan.php */