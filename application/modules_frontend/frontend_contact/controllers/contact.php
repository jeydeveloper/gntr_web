<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Frontend {

	function __construct(){
		parent::__construct();
	}
	
	function index() {
		$this->template->set('title', 'Contact Us');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('theme/' . $this->_data['theme'] . '/contact', 'lists', $this->_data);

		//---this page has been cached. if want to be clear, delete the file cache in "root/cache/".
		$this->output->cache(CACHE_TIME);
	}
}

?>