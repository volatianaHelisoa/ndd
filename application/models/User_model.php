<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get t_user by id
     */
    function get_t_user($id)
    {
        return $this->db->get_where('t_user',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all t_user
     */
    function get_all_t_user()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('t_user')->result_array();
    }
        
    /*
     * function to add new t_user
     */
    function add_t_user($params)
    {
        $this->db->insert('t_user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update t_user
     */
    function update_t_user($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('t_user',$params);
    }
    
    /*
     * function to delete t_user
     */
    function delete_t_user($id)
    {
        return $this->db->delete('t_user',array('id'=>$id));
    }
    
  
    	/**
	 * Verifie si login/password existe
	 */
	public function get_admin( $login, $password ) {
		$this->db->select( 'email', 'password' );
		$this->db->from( 't_user' );
		$this->db->where( 'email', $login );
        $this->db->where("password like binary",$password);
        $query = $this->db->get();
       
		if ( $query->num_rows() == 1 ) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

    
    /**
	 * Retourne lastname par rapport a un $login si $login exist
	 */
	public function get_lname( $login ) {
		$this->db->select( 'name' );
		$this->db->from( 't_user' );
		$this->db->where( 'email', $login );
		$query = $this->db->get();
		$name  = $query->result();
		if ( $query->num_rows() == 1 ) {
			return $name[0]->name;

		} else {
			return FALSE;
		}
    }
    
      /**
	 * Retourne name par rapport a un $login si $login exist
	 */
	public function get_fname( $login ) {
		$this->db->select( 'firstname' );
		$this->db->from( 't_user' );
		$this->db->where( 'email', $login );
		$query = $this->db->get();
		$name  = $query->result();
		if ( $query->num_rows() == 1 ) {
			return $name[0]->firstname;
		} else {
			return FALSE;
		}
    }

      /*
     * Get t_user by email
     */
    function get_t_user_email($email)
    {
        return $this->db->get_where('t_user',array('email'=>$email))->row_array();
    }

    /**
	 * Creation guid numeric
	 */
	function get_rand_guid( $length ) {
		if ( $length > 0 ) {
			$rand_id = "";
			for ( $i = 1; $i <= $length; $i ++ ) {
				mt_srand( (double) microtime() * 1000000 );
				$num = mt_rand( 1, 36 );
				$rand_id .= $this->assign_rand_guid( $num );
			}
		}

		return $rand_id;
	}


	/**
	 * Requete qui retourne les informations d'un utilisateur par rapport a son email si existe
	 */
	public function get_email( $email ) {
		$this->db->select( 'email' );
		$this->db->from( 't_user' );
		$this->db->where( 'email', $email );
		$query = $this->db->get();
		if ( $query->num_rows() == 1 ) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

