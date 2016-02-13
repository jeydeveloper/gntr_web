<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mekanikal extends MY_Frontend {

	function __construct(){
		parent::__construct();
	}
	
	function index() {
		$this->template->set('title', 'Mekanikal');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('theme/' . $this->_data['theme'] . '/mekanikal', 'lists', $this->_data);

		//---this page has been cached. if want to be clear, delete the file cache in "root/cache/".
		if(!CACHE_DISABLED) $this->output->cache(CACHE_TIME);
	}
}

?>