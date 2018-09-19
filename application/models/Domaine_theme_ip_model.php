<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Domaine_theme_ip_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get t_domaine_theme_ip by id
     */
    function get_t_domaine_theme_ip($id)
    {
        return $this->db->get_where('t_domaine_theme_ip',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all t_domaine_theme_ip
     */
    function get_all_t_domaine_theme_ip()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('t_domaine_theme_ip')->result_array();
    }
        
    /*
     * function to add new t_domaine_theme_ip
     */
    function add_t_domaine_theme_ip($params)
    {
        $this->db->insert('t_domaine_theme_ip',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update t_domaine_theme_ip
     */
    function update_t_domaine_theme_ip($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('t_domaine_theme_ip',$params);
    }
    
    /*
     * function to delete t_domaine_theme_ip
     */
    function delete_t_domaine_theme_ip($id)
    {
        return $this->db->delete('t_domaine_theme_ip',array('id'=>$id));
    }

     /*
     * Get t_domaine_techno by id _domaine
     */
    function get_t_domaine_theme_ip_by_domaine($id_domaine)
    {
        $this->load->database();

        $this->db->select(' t_ip.adresse as ip');
        $this->db->from('t_domaine_theme_ip');
        $this->db->join('t_domaine', 't_domaine_theme_ip.id_domaine = t_domaine.id', 'inner');
        $this->db->join('t_ip', 't_domaine_theme_ip.id_ip = t_ip.id', 'inner');
        $this->db->where( 't_domaine.id', $id_domaine );     
       

        $query = $this->db->get();
        $domaine_ip = $query->row_array();
        return $domaine_ip;
    }

       /*
     * Get t_domaine_techno by id _domaine
     */
    function get_t_domaine_theme_ip_theme_by_domaine($id_domaine)
    {
        $this->load->database();

        $this->db->select(' t_theme.name as name');
        $this->db->from('t_domaine_theme_ip');
        $this->db->join('t_domaine', 't_domaine_theme_ip.id_domaine = t_domaine.id', 'inner');
        $this->db->join('t_theme', 't_domaine_theme_ip.id_theme = t_theme.id', 'inner');
        $this->db->where( 't_domaine.id', $id_domaine );     
       
        $query = $this->db->get();
        $domaine_theme = $query->row_array();
        return $domaine_theme;
    }

       /*
     * Get t_domaine_techno by id _domaine
     */
    function get_t_domaine_theme_ip_theme_by_ip($id_ip)
    {
        $this->load->database();

        $this->db->select(' t_theme.name as name');
        $this->db->from('t_domaine_theme_ip');
        $this->db->join('t_domaine', 't_domaine_theme_ip.id_domaine = t_domaine.id', 'inner');
        $this->db->join('t_theme', 't_domaine_theme_ip.id_theme = t_theme.id', 'inner');
        $this->db->join('t_ip', 't_domaine_theme_ip.id_ip = t_ip.id', 'inner');
        $this->db->where( 't_ip.adresse', $id_ip );     
       
        $query = $this->db->get();
        $domaine_theme = $query->result_array();
        return $domaine_theme;
    }

      /*
     * Get t_domaine_techno by id _domaine
     */
    function get_t_domaine_theme_ip_by_ip($id_ip)
    {
        $this->load->database();

        $this->db->select(' t_domaine_theme_ip.*');
        $this->db->from('t_domaine_theme_ip');      
        $this->db->join('t_ip', 't_domaine_theme_ip.id_ip = t_ip.id', 'inner');
        $this->db->where( 't_ip.id', $id_ip );     
       
        $query = $this->db->get();
        $domaine_theme = $query->result_array();
        return $domaine_theme;
    }
}
