<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cms extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cms_model');
    } 

    /*
     * Listing of t_cms
     */
    function index()
    {
        $data['t_cms'] = $this->Cms_model->get_all_t_cms();
      
        $data['nb_cms'] = ($data['t_cms'] != null && count($data['t_cms']) >0 ) ? count($data['t_cms']) : 0;
        $data['_view'] = 'cms/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new t_cms
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'type' => $this->input->post('type'),
            );
            
            $t_cms_id = $this->Cms_model->add_t_cms($params);
            redirect('cms');
        }
        else
        {            
            $data['_view'] = 'cms/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a t_cms
     */
    function edit($id)
    {   
        // check if the t_cms exists before trying to edit it
        $data['t_cms'] = $this->Cms_model->get_t_cms($id);
        
        if(isset($data['t_cms']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'type' => $this->input->post('type'),
                );

                $this->Cms_model->update_t_cms($id,$params);            
                redirect('cms');
            }
            else
            {
                $data['_view'] = 'cms/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The t_cms you are trying to edit does not exist.');
    } 

    /*
     * Deleting t_cms
     */
    function remove($id)
    {
        $t_cms = $this->Cms_model->get_t_cms($id);

        // check if the t_cms exists before trying to delete it
        if(isset($t_cms['id']))
        {
            $this->Cms_model->delete_t_cms($id);
            redirect('cms');
        }
        else
            show_error('The t_cms you are trying to delete does not exist.');
    }
    
}
