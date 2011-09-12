<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model {
	function __construct()
	{
		parent::__construct();
		
	}

	function insert_user($data) {
		if(!$this->_validate_username($data['username'])):
			return array(
					false, 
					'user_invalid', 
					null
					);
		else: 
			return array(
					true,
					'user_inserted',
					$this->mongo_db->insert('users', $data)
					);
		endif;
	}
	
	private function _validate_username($user) {
		if($user['username'] === '' || $user['password'] != $user['password_again'] || $user['password'] === '') return false;
		$res = $this->mongo_db->get_where('users', array('username' => $user), 1);
		return !(sizeof($res) > 0);
	}
	
	function get_userdata($username) {
		return $this->mongo_db->get_where('users', array('username' => $username));
	}
	

}