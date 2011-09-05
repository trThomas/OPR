<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function index()
	{
		/*$users = $this->mongo_db->get_where('users', array('ort' => 'stuttgart'));
		foreach ($users as $u) :
		echo $u->_id;
		endforeach;
	
		echo "<pre>";
		var_dump($users);
		echo "</pre>";
		*/
		$this->_init();
	}
	
	function _init() {
		#$this->load->library('parser');
		$this->data['content'] = 'the content';
		$this->render();
	}
	
	function render()
	{
		$this->template->write_view('content', 'film/backend-film', $this->data);
		$this->template->render();
	}
	
}