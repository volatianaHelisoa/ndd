<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {      
       
        $element = new stdClass();

        $this->load->model('Domaine_model');
        $domaine_data = $this->Domaine_model->get_all_t_domaine();
        $element->nb_site = ($domaine_data != null && count($domaine_data) >0 ) ? count($domaine_data) : 0;
      
        $this->load->model('Registrar_model');
        $data_registrar = $this->Registrar_model->get_all_t_registrar();
        $element->nb_registrar = ($data_registrar != null && count($data_registrar) >0 ) ? count($data_registrar) : 0;

        $this->load->model('Hebergement_model');
        $data_hebergement = $this->Hebergement_model->get_all_t_hebergement();
        $element->nb_hebergement = ($data_hebergement != null && count($data_hebergement) >0 ) ? count($data_hebergement) : 0;
   
        $this->load->model('Ip_model');
        $data_ip =  $this->Ip_model->get_all_t_ip();       
        $element->nb_ip = ($data_ip != null && count($data_ip) >0 ) ? count($data_ip) : 0;
        
        $this->load->model('User_model');
        $data_user = $this->User_model->get_all_t_user();
        $element->nb_user  = ($data_user != null && count($data_user) >0 ) ? count($data_user) : 0;

        $data['t_dashboard'] = $element;  
 
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/full',$data);
    }
}
