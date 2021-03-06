<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Role extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Role_model');
    } 

    /*
     * Listing of t_role
     */
    function index()
    {
        $data['t_role'] = $this->Role_model->get_all_t_role();
        $data['nb_role'] = ($data['t_role'] != null && count($data['t_role']) >0 ) ? count($data['t_role']) : 0;
 
        $data['_view'] = 'role/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new t_role
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'type' => $this->input->post('type'),
            );
            
            $t_role_id = $this->Role_model->add_t_role($params);
            redirect('role');
        }
        else
        {            
            $data['_view'] = 'role/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a t_role
     */
    function edit($id)
    {   
        // check if the t_role exists before trying to edit it
        $data['t_role'] = $this->Role_model->get_t_role($id);
        
        if(isset($data['t_role']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'type' => $this->input->post('type'),
                );

                $this->Role_model->update_t_role($id,$params);            
                redirect('role');
            }
            else
            {
                $data['_view'] = 'role/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The t_role you are trying to edit does not exist.');
    } 

    /*
     * Deleting t_role
     */
    function remove($id)
    {
        $t_role = $this->Role_model->get_t_role($id);

        // check if the t_role exists before trying to delete it
        if(isset($t_role['id']))
        {
            $this->Role_model->delete_t_role($id);
            redirect('role');
        }
        else
            show_error('The t_role you are trying to delete does not exist.');
    }
    
}
