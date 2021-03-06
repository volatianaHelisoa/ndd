<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cms_techno extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cms_techno_model');
    } 

    /*
     * Listing of t_cms_techno
     */
    function index()
    {
        $data['t_cms_techno'] = $this->Cms_techno_model->get_all_t_cms_techno();
        
        $data['_view'] = 'cms_techno/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new t_cms_techno
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_cms' => $this->input->post('id_cms'),
				'id_techno' => $this->input->post('id_techno'),
            );
            
            $t_cms_techno_id = $this->Cms_techno_model->add_t_cms_techno($params);
            redirect('cms_techno/index');
        }
        else
        {            
            $data['_view'] = 'cms_techno/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a t_cms_techno
     */
    function edit($id)
    {   
        // check if the t_cms_techno exists before trying to edit it
        $data['t_cms_techno'] = $this->Cms_techno_model->get_t_cms_techno($id);
        
        if(isset($data['t_cms_techno']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_cms' => $this->input->post('id_cms'),
					'id_techno' => $this->input->post('id_techno'),
                );

                $this->Cms_techno_model->update_t_cms_techno($id,$params);            
                redirect('cms_techno/index');
            }
            else
            {
                $data['_view'] = 'cms_techno/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The t_cms_techno you are trying to edit does not exist.');
    } 

    /*
     * Deleting t_cms_techno
     */
    function remove($id)
    {
        $t_cms_techno = $this->Cms_techno_model->get_t_cms_techno($id);

        // check if the t_cms_techno exists before trying to delete it
        if(isset($t_cms_techno['id']))
        {
            $this->Cms_techno_model->delete_t_cms_techno($id);
            redirect('cms_techno/index');
        }
        else
            show_error('The t_cms_techno you are trying to delete does not exist.');
    }
    
}
