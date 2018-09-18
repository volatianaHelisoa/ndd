<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of t_user
     */
    function index()
    {
        $data['t_user'] = $this->User_model->get_all_t_user();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new t_user
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $tpass    = $this->input->post( 'password' );
		    $pass     = str_replace( ' ', '', $tpass );
            $md5pass  = md5( $pass );
            $sha1pass = sha1( $md5pass );
            $password = crypt( $sha1pass, $md5pass );
            
            $params = array(
				'id_role' => $this->input->post('id_role'),
				'name' => $this->input->post('name'),
				'firstname' => $this->input->post('firstname'),
				'email' => $this->input->post('email'),
				'password' =>  $password,
            );
            
            $t_user_id = $this->User_model->add_t_user($params);
            redirect('user/index');
        }
        else
        {
			$this->load->model('Role_model');
			$data['all_t_role'] = $this->Role_model->get_all_t_role();
            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a t_user
     */
    function edit($id)
    {   
        // check if the t_user exists before trying to edit it
        $data['t_user'] = $this->User_model->get_t_user($id);
        
        if(isset($data['t_user']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $tpass    = $this->input->post( 'password' );
                $pass     = str_replace( ' ', '', $tpass );
                $md5pass  = md5( $pass );
                $sha1pass = sha1( $md5pass );
                $password = crypt( $sha1pass, $md5pass );
            
                $params = array(
					'id_role' => $this->input->post('id_role'),
					'name' => $this->input->post('name'),
					'firstname' => $this->input->post('firstname'),
					'email' => $this->input->post('email'),
					'password' =>  $password,
                );

                $this->User_model->update_t_user($id,$params);            
                redirect('user/index');
            }
            else
            {
				$this->load->model('Role_model');
				$data['all_t_role'] = $this->Role_model->get_all_t_role();

                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The t_user you are trying to edit does not exist.');
    } 

    /*
     * Deleting t_user
     */
    function remove($id)
    {
        $t_user = $this->User_model->get_t_user($id);

        // check if the t_user exists before trying to delete it
        if(isset($t_user['id']))
        {
            $this->User_model->delete_t_user($id);
            redirect('user/index');
        }
        else
            show_error('The t_user you are trying to delete does not exist.');
    }
    

 /*
     * Listing of t_user
     */
    function login()
    {
        $this->load->view( 'template/head' );
		$this->load->view( 'user/login' );
        // $data['_view'] = 'user/login';
        // $this->load->view('layouts/main');
    }

    /**
	 * Acces page d'adminstration
	 */
	public function access(  ) {
        var_dump($this);
		$this->form_validation->set_rules( 'email', 'Login', 'required' );
		$this->form_validation->set_rules( 'password', 'Password', 'required|callback_verifyUser' );

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view( 'template/head' );
			$this->load->view( 'user/login' );
		} else {
			$remember = $this->input->post( 'check_session' );

			$tname = $this->input->post( 'email' );
			$name  = str_replace( ' ', '', $tname );
			$this->load->model( 'User_model' );
			$fname     = $this->User_model->get_fname( $name );
			$lname     = $this->User_model->get_lname( $name );
			$nameadmin = $fname . " " . $lname;

			$sessiondata = array(
				'checksession' => $this->input->post( 'check_session' ),
				'login'        => $nameadmin,
				'loginuser'    => TRUE
			);

			// si case remember me est coche
			if ( $remember ) {
				$sessiondata['password']     = $this->input->post( 'password' );
				$sessiondata['checksession'] = $this->input->post( 'check_session' );
				$sessiondata['username'] = $tname;
			}

			$this->session->set_userdata( 'sessiondata', $sessiondata );
			redirect( 'users' );
		}
    }
    
    /**
	 * Callback qui verifie si login/password existe
	 */
	public function verifyUser() {
		$tlogin   = $this->input->post( 'email' );
		$login    = str_replace( ' ', '', $tlogin );
		$tpass    = $this->input->post( 'password' );
		$pass     = str_replace( ' ', '', $tpass );
		$md5pass  = md5( $pass );
		$sha1pass = sha1( $md5pass );
		 $password = crypt( $sha1pass, $md5pass );


		$this->load->model( 'User_model' );
		if ( $this->User_model->get_admin( $login, $password ) ) {
			redirect( 'dashboard' );
		} else {
			redirect( 'authentificationfailed' );
			return FALSE;
		}
    }
    
    function detail($id)
   {

       // check if the t_user exists before trying to edit it
       $data['t_user'] = $this->User_model->get_t_user($id);
       $id_role = $data['t_user']['id_role'];
       $this->load->model('Role_model');
       $data['t_role'] = $this->Role_model->get_t_role($id_role)['type'];
       if(isset($data['t_user']['id']))
       {
                $this->load->model('Role_model');
               $data['all_t_role'] = $this->Role_model->get_all_t_role();

               $data['_view'] = 'user/detail';
               $this->load->view('layouts/main',$data);
       }
       else
           show_error('The t_user you are trying to edit does not exist.');
   }

    
}

