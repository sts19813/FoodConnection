<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class LoginModel extends CI_Model{
		public function __construct()
        {
        	 parent::__construct();
			 $this->load->database();
			 $this->load->helper('url');
        }

        public function login($email,$pass)
        {
        	$query = $this->db->get_where('alumnos',array('Correo'=>$email));
        	if ($query->num_rows()==1) 
        	{
        		$row=$query->row();
        		if(password_verify($pass,$row->Nombre))
        		{
        			$data=array(
        				'Correo'=>$row->Correo,
        				'Matricula'=>$row->Nombre
        			);
        			$this->session->set_userdata($data);
        			return 1;
        		}	
        	}
        	//$this->session->unset_userdata('user_data');
        	return 0;
        }
}
?>

