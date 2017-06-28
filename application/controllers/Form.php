<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

	public function index()	{
        $this->load->helper('form');
        $this->load->library('form_validation');
        $dados['titulo'] = 'Form';
        $this->load->view('form', $dados);
	}
}
