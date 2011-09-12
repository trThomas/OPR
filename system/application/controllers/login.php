<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->_init();
	}
	
	private function _init() {
		$this->data ['data'] = 'data';
		$this->_render();
	}
	
	private function _render() {
		$this->template->write_view('header', 'components/header_logged_out');
		$this->template->write_view('footer', 'components/footer');
		$this->template->write_view('content', 'pages/login_register', $this->data);
		$this->template->render();
	}
	
}