<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class Usermodel extends CI_Model{

        public function getAll(){
            $this->load->database();
            $query = $this->db->get('users');
            return $query->result();
        }
    }
?>