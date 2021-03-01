<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class Welcom extends  CI_Controller{

        public function index(){
            $this->load->database();                        //Carga la base de datos 
            $this->load->model('usermodel');                //Carga el modelo
            $data['UserName'] = $this->Usermodel->getAll();    //Metodo del modelo
            $this->load->view('welcome_message', $data);            //Carga la vista que muestra los usuarios y pasamos la variable data 
        }    
    }
?>