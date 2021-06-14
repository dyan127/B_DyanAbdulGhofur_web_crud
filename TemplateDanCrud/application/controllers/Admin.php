<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->helper('url');
}
	public function index()
	{
		$this->load->library('template');
		$this->template->views('Admin/_Template/template');
	}
}
 ?>
