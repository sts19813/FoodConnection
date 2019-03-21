<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrlogin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('Form_validation');
		$this->load->model('LoginModel');
		$this->load->library('session');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Correo', 'required');
		$this->form_validation->set_rules('password', 'Matricula', 'required|callback_verifica');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('welcome_message');
			$this->load->view('Viewlogin');
			
		}

	}

	public function verifica()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$result = $this->LoginModel->login($email,$pass);
		switch($result)
		{
			case 0:
				$this->form_validation->set_message('verifica','Contraseña incorrecta');
				redirect('Ctrlogin');
				break;
			case 1:
				redirect('Ctrprincipal');
				break;
			default:
				break;

		}

	}

}
?>
