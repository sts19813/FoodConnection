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
        	$query = $this->db->get_where('usuarios',array('correo'=>$email));
        	if ($query->num_rows()==1) 
        	{
        		$row=$query->row();
        		if(password_verify($pass,$row->contrasenia))
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


        public function guardar($nom, $corr, $contra)
        {

                

                 $this->db->query("INSERT INTO usuarios (nombre, correo, contrasenia) values('$nom', '$corr', '$contra')");
        }
}
?>

