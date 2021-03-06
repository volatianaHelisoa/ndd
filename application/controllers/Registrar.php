<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */ 
 
class Registrar extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Registrar_model');
    } 

    /*
     * Listing of t_registrar
     */
    function index()
    {
        $data['t_registrar'] = $this->Registrar_model->get_all_t_registrar();
        $data['nb_registrar'] = ($data['t_registrar'] != null && count($data['t_registrar']) >0 ) ? count($data['t_registrar']) : 0;
        $res = array();
        foreach($data['t_registrar'] as $row) {
			$element = new stdClass();
            $element->id = $row['id'];
            $element->name =  $row['name'];
            $element->url =  $row['url'];
            $element->login =  $row['login'];
            $element->password =  $row['password'];   
           
            $this->load->model('Domaine_model');
            $domaine_data = $this->Domaine_model->get_by_id_registrar($row['id']);
            $element->nb_site = ($domaine_data != null && count($domaine_data) >0 ) ? count($domaine_data) : 0;
		
            $res[] = $element;	
        }
       
        $data['t_registrar'] = $res;  
        $data['_view'] = 'registrar/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new t_registrar
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'url' => $this->input->post('url'),
				'login' => $this->input->post('login'),
            );
            if($this->Registrar_model->get_t_registrar_by_name($this->input->post('name')) == 0)  
            {
                $t_registrar_id = $this->Registrar_model->add_t_registrar($params);
                redirect('registrar');
            }
            else
            {    
                $data['error_nom'] = "Ce registrar existe déjà !";             
                $data['_view'] = 'registrar/add';
                $this->load->view('layouts/main',$data);
            }
        }
        else
        {            
            $data['_view'] = 'registrar/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a t_registrar
     */
    function edit($id)
    {   
        // check if the t_registrar exists before trying to edit it
        $data['t_registrar'] = $this->Registrar_model->get_t_registrar($id);
        
        if(isset($data['t_registrar']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'name' => $this->input->post('name'),
					'url' => $this->input->post('url'),
					'login' => $this->input->post('login'),
                );
                // if($this->Registrar_model->get_t_registrar_by_name($this->input->post('name')) == 0)  
                // {
                    $this->Registrar_model->update_t_registrar($id,$params);            
                    redirect('registrar');
                // }
                // else
                // {    
                //     $data['error_nom'] = "Ce registrar existe déjà !";    
                //     $data['_view'] = 'registrar/edit';
                //     $this->load->view('layouts/main',$data);
                // }       
            }
            else
            {
                $data['_view'] = 'registrar/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The t_registrar you are trying to edit does not exist.');
    } 

    /*
     * Deleting t_registrar
     */
    function remove($id)
    {
        $t_registrar = $this->Registrar_model->get_t_registrar($id);

        // check if the t_registrar exists before trying to delete it
        if(isset($t_registrar['id']))
        {
            $this->Registrar_model->delete_t_registrar($id);
            redirect('registrar');
        }
        else
            show_error('The t_registrar you are trying to delete does not exist.');
    }

    function get_info_by_id(){
      
        if (isset($_GET['id'])) {           
           
            $registrar =  $this->Registrar_model->get_t_registrar($_GET['id']);
          
            echo json_encode($registrar);
            die;
           
        }
    }
    
}
