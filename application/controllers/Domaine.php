<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Domaine extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Domaine_model');
    } 

    /*
     * Listing of t_domaine
     */
    function index()
    {
        $data['t_domaine'] = $this->Domaine_model->get_all_t_domaine();
       
        $res = array();
        foreach($data['t_domaine'] as $row) {
			$element = new stdClass();
            $element->id = $row['id'];
            $element->domaine =  $row['nom'];
           
                       
            $this->load->model('Registrar_model');
            $registrar_obj = $this->Registrar_model->get_t_registrar($row['id_registrar']);    
            $element->registrar =  $registrar_obj['name'];
            $element->id_registrar = $row['id_registrar'];
            $element->id_cms = $row['id_cms'];

            $element->heberg = "";
            $element->ip = "";
            $element->cms ="";
            $element->techno = "";
            $element->theme = "";         

            if($row['id_heberg'] != "" && $row['id_heberg'] != null )
            {
                $this->load->model('Hebergement_model');
                $heberg_obj = $this->Hebergement_model->get_t_hebergement($row['id_heberg']);    
                $element->heberg =  $heberg_obj['name'];
                $element->id_heberg = $row['id_heberg'];
               
               
               
                if($row['id_cms'] != "" && $row['id_cms'] != null )
                {
                    $this->load->model('Cms_model');
                    $cms_obj = $this->Cms_model->get_t_cms($row['id_cms']);    
                    $element->cms =  $cms_obj['type'];
                }
              
                $element->ftp_login = $row['ftp_login'];
                $element->ftp_password = $row['ftp_password'];
                $element->ftp_server = $row['ftp_server'];
                $element->admin_url =  $row['admin_url'];
                $element->admin_login = $row['admin_login'];
                $element->admin_password = $row['admin_password'];

                /* plugins */               
                $this->load->model('Domaine_techno_model');
                $domaine_techno = $this->Domaine_techno_model->get_t_domaine_techno_by_domaine($row['id']);   
               
                if($domaine_techno != null )                
                    $element->techno =  $domaine_techno;     
                 
                /**IP */               
                $this->load->model('Domaine_theme_ip_model');
                $domaine_theme_ip = $this->Domaine_theme_ip_model->get_t_domaine_theme_ip_by_domaine($row['id']);   
              
                if($domaine_theme_ip != null)
                  {
                    $ipid = $domaine_theme_ip["id_ip"];
                    $this->load->model('Ip_model');
                    $domaine_ip = $this->Ip_model->get_t_ip($ipid);
                    $element->ip = $domaine_ip;  
                  
                  }
                 /**IP */               
                 $this->load->model('Domaine_theme_ip_model');
                 $domaine_theme = $this->Domaine_theme_ip_model->get_t_domaine_theme_ip_theme_by_domaine($row['id']);   
               
                 if($domaine_theme != null )                
                     $element->theme =  $domaine_theme;  
            }           
		
            $res[] = $element;	
        }

        $this->load->model('Registrar_model');
        $data['all_t_registrar'] = $this->Registrar_model->get_all_t_registrar();

        $this->load->model('Hebergement_model');
        $data['all_t_hebergement'] = $this->Hebergement_model->get_all_t_hebergement();
            

        $this->load->model('Theme_model');
        $data['all_t_theme'] = $this->Theme_model->get_all_t_theme();      


        $this->load->model('Domaine_model');
        $domaine_data = $this->Domaine_model->get_all_t_domaine();
        $data['nb_site'] = ($domaine_data != null && count($domaine_data) >0 ) ? count($domaine_data) : 0;

        $this->load->model('Cms_model');
        $data['all_t_cms'] = $this->Cms_model->get_all_t_cms();

      
        $data['t_domaine'] = $res;  
        $data['_view'] = 'domaine/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new t_domaine
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {              

            $today = date("Y-m-d"); 
            $id_heberg = $this->input->post('id_heberg');
           
            if($id_heberg == ""){
                $params = array(
                    'nom' => $this->input->post('nom'),
                    'id_registrar' => $this->input->post('id_registrar'),		
                    'date_creation' =>  $today,
                );
            }
            else{
                $params = array(
                    'nom' => $this->input->post('nom'),                   
                    'id_registrar' => $this->input->post('id_registrar'),
                    'id_heberg' => $this->input->post('id_heberg'),
                    'id_cms' => $this->input->post('id_cms'),
                    'ftp_login' => $this->input->post('ftp_login'),
                    'ftp_password' => $this->input->post('ftp_password'),
                    'ftp_server' => $this->input->post('ftp_server'),
                    'admin_url' => $this->input->post('admin_url'),
                    'admin_login' => $this->input->post('admin_login'),
                    'admin_password' => $this->input->post('admin_password'),                   
                    'date_creation' =>  $today,
                );              
            }         
          
            $t_domaine_id = $this->Domaine_model->add_t_domaine($params);
            /**ajout ip */
           
            $id_theme = empty( $this->input->post('theme')) ? NULL :  $this->input->post('theme')   ;
         
            if(!empty( $this->input->post('theme'))){
                $theme = $this->input->post('theme');
                $this->load->model('Theme_model');
                $theme_obj = $this->Theme_model->get_t_theme_by_name($theme);   
                $id_theme  = $theme_obj['id'];       
            }            
            
            $id_ip = empty($_POST['addr-ip']) ? NULL : $_POST['addr-ip'];   

            if( $id_ip || $id_theme){
                
                $params_ip = array(
                    'id_domaine' => $t_domaine_id,
                    'id_ip' =>  $id_ip,
                    'id_theme' => $id_theme,
                );
                $this->load->model('Domaine_theme_ip_model');        
                $t_domaine_theme_ip_id = $this->Domaine_theme_ip_model->add_t_domaine_theme_ip($params_ip);                
            }
          
            $techno_array = empty($_POST['select_ml_techno']) ? NULL : $_POST['select_ml_techno'];   
            if(isset($techno_array) && count($techno_array) > 0)     
            { 
                $this->load->model('Domaine_techno_model');
                foreach($techno_array as $key){
                   
                    $params = array(
                        'id_domaine' => $t_domaine_id,
                        'id_techno' => $key,
                    );
                    
                   $t_domaine_techno_id = $this->Domaine_techno_model->add_t_domaine_techno($params);
                   
                }
            }
        
            redirect('domaine/index');
        }
        else
        {
			$this->load->model('Cms_model');
			$data['all_t_cms'] = $this->Cms_model->get_all_t_cms();

			$this->load->model('Registrar_model');
			$data['all_t_registrar'] = $this->Registrar_model->get_all_t_registrar();

			$this->load->model('Hebergement_model');
            $data['all_t_hebergement'] = $this->Hebergement_model->get_all_t_hebergement();
            
            $this->load->model('Techno_model');
            $data['all_t_techno'] = $this->Techno_model->get_all_t_techno();
            
            $this->load->model('Theme_model');
            $data['all_t_theme'] = $this->Theme_model->get_all_t_theme();

            $data['_view'] = 'domaine/add';
            $this->load->view('layouts/full',$data);
        }
    }  

    /*
     * Editing a t_domaine
     */
    function edit($id)
    {   
        // check if the t_domaine exists before trying to edit it
      
        $row  =   $this->Domaine_model->get_t_domaine($id);
        $element = $this->get_current_domaine($row);
        $data['t_domaine'] =   $element;

        if(isset( $element->id))
        {

            if(isset($_POST) && count($_POST) > 0)     
            {   
                $today = date("Y-m-d"); 
                $params = array(
					'id_cms' => $this->input->post('id_cms'),
					'id_registrar' => $this->input->post('id_registrar'),
					'id_heberg' => $this->input->post('id_heberg'),
					'ftp_login' => $this->input->post('ftp_login'),
					'ftp_password' => $this->input->post('ftp_password'),
					'ftp_server' => $this->input->post('ftp_server'),
					'admin_url' => $this->input->post('admin_url'),
					'admin_login' => $this->input->post('admin_login'),
					'admin_password' => $this->input->post('admin_password'),
					'nom' => $this->input->post('nom'),
					'date_creation' => $today,
                );

                $this->Domaine_model->update_t_domaine($id,$params);   
                
            
                /**ajout ip */
               
                $id_theme = empty( $this->input->post('theme')) ? NULL :  $this->input->post('theme')   ;
             
                if(!empty( $this->input->post('theme'))){
                    $theme = $this->input->post('theme');
                    $this->load->model('Theme_model');
                    $theme_obj = $this->Theme_model->get_t_theme_by_name($theme);   
                    $id_theme  = $theme_obj['id'];       
                }            
                
                $id_ip = empty($_POST['addr-ip']) ? NULL : $_POST['addr-ip'];   
                
                $params_ip = array(
                    'id_domaine' => $element->id,
                    'id_ip' =>  $id_ip,
                    'id_theme' => $id_theme,
                );

                $this->load->model('Domaine_theme_ip_model');
              
                /*delete relation */
               
                $t_domaine_theme = $this->Domaine_theme_ip_model->get_t_domaine_theme_ip_by_param($element->id);
                if(isset($t_domaine_theme['id']))
                {
                    $this->Domaine_theme_ip_model->delete_t_domaine_theme_ip($t_domaine_theme['id']);  
                }              

                $t_domaine_theme_ip_id = $this->Domaine_theme_ip_model->add_t_domaine_theme_ip($params_ip);  

                
                $techno_array = empty($_POST['select_ml_techno']) ? NULL : $_POST['select_ml_techno']; 
                if(isset($techno_array) && count($techno_array) > 0)     
                { 
                    $this->load->model('Domaine_techno_model');
                    if($element->techno != null)
                    { 
                        $this->Domaine_techno_model->delete_t_domaine_techno_by_domaine($element->techno[0]['id_domaine']);  
                    }
                 
                    foreach($techno_array as $key){                       
                        $params = array(
                            'id_domaine' => $element->id,
                            'id_techno' => $key,
                        );
                     
                       $t_domaine_techno_id = $this->Domaine_techno_model->add_t_domaine_techno($params);
                       
                    }
                }
               
                redirect('domaine/index');
            } 
            else
            {
               
               
                if( $element->id_heberg != "" && $element->id_heberg  != null )
                {                    
                    $this->load->model('Ip_model');               
                    $data['all_t_ip'] = $this->Ip_model->get_ip_id_hebergement( $element->id_heberg );  
                }   

				$this->load->model('Cms_model');
				$data['all_t_cms'] = $this->Cms_model->get_all_t_cms();

				$this->load->model('Registrar_model');
				$data['all_t_registrar'] = $this->Registrar_model->get_all_t_registrar();

				$this->load->model('Hebergement_model');
                $data['all_t_hebergement'] = $this->Hebergement_model->get_all_t_hebergement();
               
                $this->load->model('Techno_model');
                $data['all_t_techno'] = $this->Techno_model->get_all_t_techno();
              
                $data['_view'] = 'domaine/edit';
                $this->load->view('layouts/full',$data);
            }
        }
        else
            show_error('The t_domaine you are trying to edit does not exist.');
    } 


     /*
     * Editing a t_domaine
     */
    function edit_ip()
    {   
        $param = $_POST;
        $id = $param["ndd_id"];
      
        $row  =   $this->Domaine_model->get_t_domaine($id);
        $element = $this->get_current_domaine($row);
        $data['t_domaine'] =   $element;

        if(isset( $element->id))
        {
                $today = date("Y-m-d");                 
                $params = array(
                    'id_cms' => $element->id_cms,
                    'id_registrar' => $param["registrar"],
                    'id_heberg' =>  $param["heberg"],
                    'ftp_login' => $element->ftp_login,
                    'ftp_password' => $element->ftp_password,
                    'ftp_server' => $element->ftp_server,
                    'admin_url' => $element->admin_url,
                    'admin_login' =>  $element->admin_login,
                    'admin_password' =>  $element->admin_password,
                    'nom' => $element->nom,
                    'date_creation' => $today,
                 );
                $this->Domaine_model->update_t_domaine($id,$params);                  
            
                /**ajout ip */               
                $id_theme = empty( $param["theme"]) ? NULL :  $param["theme"];  
                $id_ip = empty($param["ip"]) ? NULL : $param["ip"];   
                
                $params_ip = array(
                    'id_domaine' => $element->id,
                    'id_ip' =>  $id_ip,
                    'id_theme' => $id_theme,
                );

                $this->load->model('Domaine_theme_ip_model');
              
                /*delete relation */               
                $t_domaine_theme = $this->Domaine_theme_ip_model->get_t_domaine_theme_ip_by_param($element->id);
                if(!empty( $param["ip"]) || !empty( $param["theme"]  ) )
                {
                    $t_domaine_theme_ip_id = $this->Domaine_theme_ip_model->add_t_domaine_theme_ip($params_ip); 
                    $this->Domaine_theme_ip_model->delete_t_domaine_theme_ip_by_domaine($element->id);  

                    $t_domaine_theme_ip_id = $this->Domaine_theme_ip_model->add_t_domaine_theme_ip($params_ip); 
                }   
                
                echo "index";
                die; 
        }
        echo "no-index";
       die; 
    } 


    /*
     * Editing a t_domaine
     */
    function edit_acces()
    {             
        $param = $_POST;
        $id = $param["ndd_id"];

        $row  =   $this->Domaine_model->get_t_domaine($id);
        $element = $this->get_current_domaine($row);
        $data['t_domaine'] =   $element;
       
        if(isset($element->id))
        {    
            $today = date("Y-m-d"); 
            $params = array(
                'id_cms' => $param["cms"],
                'id_registrar' =>$element->id_registrar,
                'id_heberg' => $element->id_heberg,
                'ftp_login' => $param["ftp_login"],
                'ftp_password' => $param["ftp_password"],
                'ftp_server' => $param["ftp_server"],
                'admin_url' => $param["admin_url"],
                'admin_login' => $param["admin_login"],
                'admin_password' =>  $param["admin_password"],
                'nom' => $element->nom,
                'date_creation' => $today,
            );

                $this->Domaine_model->update_t_domaine($id,$params);  
                $techno_array = empty($param["techno_list"]) ? NULL :  $param["techno_list"];
                if(isset($techno_array) && count($techno_array) > 0)     
                {                   
                    $this->load->model('Domaine_techno_model');
                   
                    if($element->techno != "")
                    { 
                        $this->Domaine_techno_model->delete_t_domaine_techno_by_domaine($element->techno[0]['id_domaine']);  
                    }
                    
                    foreach($techno_array as $key){                       
                        $params = array(
                            'id_domaine' => $element->id,
                            'id_techno' => $key,
                        );                     
                       $t_domaine_techno_id = $this->Domaine_techno_model->add_t_domaine_techno($params);
                    }
                }

                echo "index";
                die; 
        }
        echo "no-index";
        die; 
    } 

    function get_current_domaine($row){
       
        $element = new stdClass();
        $element->id = $row['id'];
        $element->nom =  $row['nom'];  
        $element->id_registrar = $row['id_registrar'];  
        $element->id_heberg = $row['id_heberg'];               
        $element->id_cms = $row['id_cms'];
        $element->techno = "";
        $element->theme = "";
        /** theme */               
        $this->load->model('Domaine_theme_ip_model');
        $domaine_theme = $this->Domaine_theme_ip_model->get_t_domaine_theme_ip_theme_by_domaine($row['id']);   
    
        if($domaine_theme != null )                
            $element->theme =  $domaine_theme;   

        $element->ftp_login = $row['ftp_login'];
        $element->ftp_password = $row['ftp_password'];
        $element->ftp_server = $row['ftp_server'];
        $element->admin_url =  $row['admin_url'];
        $element->admin_login = $row['admin_login'];
        $element->admin_password = $row['admin_password'];

        /* plugins */               
        $this->load->model('Domaine_techno_model');
        $domaine_techno = $this->Domaine_techno_model->get_t_domaine_techno_by_domaine($row['id']); 
        if($domaine_techno != null )                
            $element->techno =  $domaine_techno;     
          
           
        $element->ip = ""; 
        /**IP */               
        $this->load->model('Domaine_theme_ip_model');
        $domaine_ip = $this->Domaine_theme_ip_model->get_t_domaine_theme_ip_by_domaine($row['id']);   
    
        if($domaine_ip != null )                
            $element->ip =  $domaine_ip;   

        return  $element;
    }

    /*
     * Deleting t_domaine
     */
    function delete_domaine()
    {
        $param = $_POST;
        $id = $param["ndd_id"];

        // check if the t_domaine exists before trying to delete it
        if(isset($id))
        {
            remove($id);
            echo 'remove';
            die;
        }
        else
            show_error('The t_domaine you are trying to delete does not exist.');
    }



    /*
     * Deleting t_domaine
     */
    function remove($id)
    {
        $t_domaine = $this->Domaine_model->get_t_domaine($id);

        // check if the t_domaine exists before trying to delete it
        if(isset($t_domaine['id']))
        {
            $this->Domaine_model->delete_t_domaine($id);
            redirect('domaine/index');
        }
        else
            show_error('The t_domaine you are trying to delete does not exist.');
    }

    function get_autocomplete_theme(){
    
        if (isset($_GET['term'])) {
            $this->load->model('Theme_model');
            $result = $this->Theme_model->suggested_theme($_GET['term']);
           
            echo json_encode($result);
            
        }
    }

    function get_select_ip(){
    
        if (isset($_GET['id_heberg'])) {
            $this->load->model('Ip_model');
            $ip_data = $this->Ip_model->get_by_id_hebergement($_GET['id_heberg']);
          
            $ips = array();
            foreach($ip_data as $key):
                
                $a = array(
                    'id' => trim($key->id),
                    'label' => trim($key->adresse),
                    'value' => trim($key->adresse)
                );

                $ips[] = $a;
            endforeach;
            
            echo json_encode($ips);
            die;       
           
        }
    }

    function get_techno_list(){  
        /* plugins */               
        $this->load->model('Techno_model');
        $techno = $this->Techno_model->get_all_t_techno();
        $technos = array();
        foreach($techno as $key):    
           
            $a = array(
                'id' => trim($key['id']),
                'label' => trim($key['name']),
                'value' => trim($key['name'])
            );

            $technos[] = $a;
        endforeach;
        echo json_encode( $technos);
        die;        
    }
       
    function get_techno_by_domaine(){
   
        if (isset($_GET['id'])) {

            /* plugins */               
            $this->load->model('Domaine_techno_model');
            $domaine_techno = $this->Domaine_techno_model->get_t_domaine_cms_by_domaine($_GET['id']);  
            $technos = array();
           
            echo json_encode( $domaine_techno);
            die;
           
        }
    }

    function get_ip_info_by_domaine(){
   
        if (isset($_GET['id'])) {
            $ip_addresse = trim($_GET['id']);
            $this->load->model('Domaine_theme_ip_model');
            $domaine_theme = $this->Domaine_theme_ip_model->get_t_domaine_theme_ip_theme_by_ip($ip_addresse);   
          
            echo json_encode($domaine_theme);
            die;
           
        }
    }
    
}
