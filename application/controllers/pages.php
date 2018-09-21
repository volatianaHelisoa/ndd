<?php
	/**
	*   
	*/
	class Pages extends CI_Controller {
		/**
		 * Gestion page
		 */
		public function view($page = 'home'){
			if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
				show_404();
			}
			$data['title'] = ucfirst($page);

			$this->load->view('template/header_login');
			$this->load->view('admin/'.$page, $data);
			$this->load->view('template/footer');
		}

		/**
		 * page home non authentifier
		 */
		public function view1(){
			$this->load->view('template/header');
			$this->load->view('admin/homeuser');
			$this->load->view('template/footer');
		}

		/**
		 * Page d'oblie de mot de passe
		 */
		public function fpwd(){
			$this->load->view('template/forgotpass');
		}

		/**
		 * Callback pour l'oubli de mot de passe
		 */
		public function forgotpassword(){ 
			$this->form_validation->set_rules('emailuser','Emailuser','required|callback_verifyEmail');

			$email = $this->input->post('emailuser');
			$name = $this->login_model->get_name($email);
			$guid = $this->login_model->get_guid($email);
			$newtoken = $this->login_model->get_rand_guid(13);

			$link = 'Dear '.ucfirst($name).' ,<br>Your recently requested to reset your password for your '.ucfirst($name).' account. Click the link bellow to reset it:<br> <a href="'.$this->config->item('base_url').'NewPassword/?hash='.$newtoken.'">'.$this->config->item('base_url').'NewPassword</a> <br> If you did not request a password reset, please ignore this email.<br>Thanks.<br>Trigger Company.  ' ;


			if ($this->form_validation->run() == FALSE) {
				redirect('mailFailed');
			}
			else{
				$this->load->library('email');
				$this->email->from( 'anonymous.digitall@gmail.com', 'Trigger' );
				$this->email->to($email);
				$this->email->subject('FORGOT PASSWORD');
				$this->email->message($link);
				$this->email->send();
				$this->login_model->set_token($email,$newtoken);
				redirect(base_url().'SendResetPasswordConfirmation/?hash='.$guid);
			}

		}
 
		/**
		 * Callback validation email
		 */
		public function verifyEmail(){
			$email = $this->input->post('emailuser');

			if($this->login_model->get_email($email)){
				return true;
			}
			else{
				return false;
			}
		}

		/**
		 * Page confirmation d'obli de mot de passe
		 */
		public function forgotpasswordconfirmation(){
			$guid = $_GET['hash'];
			$data['admin'] = $this->login_model->get_mailguid($guid);
			$this->load->view('template/forgotpassconfirmation', $data);			
		}

		/**
		 * Page d'erreur d'authentification
		 */
		public function authentificationfailed(){
			$this->load->view('template/authfailed');			
		}

		/**
		 * Page d'erreur d'email
		 */
		public function mailfailed(){
			$this->load->view('template/mailfailed');			
		}

		/**
		 * Page d'erreur de mot de passe
		 */
		public function passwordfailed(){
			$this->load->view('template/pwdfailed');			
		}

		/**
		 * Callback pour le changement de mot de passe
		 */
		public function newpassword(){
			$token = $this->input->post('nameuser');
			$this->form_validation->set_rules('password','Password','required|callback_passwordcheck|min_length[8]');
			$this->form_validation->set_rules('password2','Password2','required|matches[password]');
			$pass = $this->input->post('password');
			$md5pass = md5($pass);
			$sha1pass = sha1($md5pass);
			$password = crypt($sha1pass, $md5pass);
			if ($this->form_validation->run() == FALSE) {
				redirect('PasswordFailed/?hash='.$token);
			}
			else{
				$this->login_model->set_pass($password,$token);
				$this->login_model->settoken($token);
				redirect('NewPasswordConfirmation');
			}		
		}

		/**
		 * Page de confirmation de nouvelle mot de passe
		 */
		public function newpasswordconfirmation(){
			$this->load->view('template/newpassconfirmation');

		}

		/**
		 * Page de changement de mot de passe si token exist
		 */
		public function npwd(){
				
				if(isset($_GET['hash'])&&!empty($_GET['hash'])){
					$token=$_GET['hash'];
					$user=$this->login_model->get_tokenuser( $token );
					if($user){
						$this->load->view('template/newpass');
					}else {
						redirect('login');
					}
					
				}
				else {
					redirect('login');
				}
				
		}

		/**
		 * page de confirmation de creation
		 */
		public function createuserconfirmation(){
			$this->load->view('template/cuserconfirmation');			
		}

		/**
		 * Page de confirmation de modification
		 */
		public function editconfirmation(){
			$this->load->view('template/editconfirmation');			
		}

		/**
		 * Page de confirmation de mise a jour
		 */
		public function updateconfirmation(){
			$this->load->view('template/updateconfirmation');			
		}

		/**
		 * page de confirmation de suppression
		 */
		public function deleteconfirmation(){
			$this->load->view('template/deleteconfirmation');			
		}

		/**
		 * Callback validation de mot de passe
		 */
		public function passwordcheck(){
			$password = $this->input->post('password');
		   if (preg_match('#[0-9]#', $password) && preg_match('#[a-z]#', $password) && preg_match('#[A-Z]#', $password) && preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $password) ) {
		     return TRUE;
		   }
		   return FALSE;
		}	

	}