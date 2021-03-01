<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->database();                     //Carga la base de datos de forma global
 		$this->load->model('Contact_model');
		$this->load->library('form_validation');
		$this->load->helper('url', 'form');

}
	public function index()
	{
		$query = $this->db->get('usuarios');
		$data['lista'] = $this->Contact_model->getAll();
		$this->load->view('welcome_message', $data);

	}	 	

	public function userRules(){
		$this->form_validation->set_rules('UserName', 'UserName', 'required');
	}

	public function addContact()
	{
		if ($this->input->post())
		{
			$this->userRules();
			if($this->form_validation->run()==true){
				$this->Contact_model->addContact();
				redirect('../');
			}else{
				$this->load->view('view_add_users');
			}
		}
		else
		{   
			$this->load->view('view_add_users');
		}
		
	}

	public function editContact($id=null)
	{
		if($id==null or !is_numeric($id))
		{
			echo'Error en el id';
            return;
		}else{	  
			if ($this->input->post())
			{
				$this->userRules();	
				if($this->form_validation->run()==true){
					$this->Contact_model->Edit($id);
					redirect('../');
				}else{
					$this->load->view('view_add_users');
				}
			}
			else
			{   
				$data['data_contactos']= $this->Contact_model->get_by_id($id);

				if(empty($data['data_contactos'])){
					echo "El usuario no existe";
					
				}else{
					print_r($data['data_contactos']);
					print_r($id);
					$this->load->view('view_add_users',$data);
				}
			}
	   }
    }


	public function delete($id=null)
	{
		if($id==null or !is_numeric($id))
		{
			echo'Error en el id';
            return;
		}
		if ($this->input->post())
			{
				$id_delete = $this->input->post('Id');
				$this->Contact_model->delete($id_delete);
				redirect('usuarios', 'refresh');
			}	
			else
			{   
				$data['data_contactos']= $this->Contact_model->get_by_id($id);

				if(empty($data['data_contactos'])){
					echo "El usuario no existe";
					
				}else{
					$this->Contact_model->delete($id); 
					redirect('Welcome');
				}
			}
    
    }
}