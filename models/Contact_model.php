<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class Contact_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function getAll()
        {
            $this->load->database();
            $query = $this->db->get('usuarios');
            return $query->result();
        }

        public function addContact()
        {
            $usersInsert = $this->input->post();
            unset($usersInsert['btn_enviar']);      
            $this->db->insert('usuarios', $usersInsert);    
        }

        public function Edit($id=null)
        {
            $usersEdit = $this->input->post();  
            unset($usersEdit['btn_enviar']);  
            $query = $this->db->where('Id', $id);    
            $this->db->update('usuarios', $usersEdit);    
        }

        public function Delete($id=null)
        {
            $query = $this->db->where('Id', $id);    
            $this->db->delete('usuarios');    
        }

        public function get_by_id($id)
        {
            $query = $this->db->where('Id', $id);    
            $query = $this->db->get('usuarios');
            return $query->result();    
        }
    }
?>