<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->helper('html');
		$this->load->view('index.php');
	}
}

?>