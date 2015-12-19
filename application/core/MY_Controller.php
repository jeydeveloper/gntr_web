<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
	var $_data;
	
	function __construct(){
		parent::__construct();
	}
}

class MY_Frontend extends MY_Controller {
	var $_data;
	
	function __construct(){
		parent::__construct();

		$this->load->helper('main');
		$this->load->helper('path');

		$this->config->load('config_theme');

		$this->_data['theme'] = $this->config->item('theme');

		$assets = $this->config->item('assets');
		$this->_data['assets']['base'] = site_url($assets['base']);
		$this->_data['assets']['js'] = site_url($assets['js']);
		$this->_data['assets']['css'] = site_url($assets['css']);
		$this->_data['assets']['images'] = site_url($assets['images']);
	}
}

?>