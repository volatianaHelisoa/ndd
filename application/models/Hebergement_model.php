<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Hebergement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get t_hebergement by id
     */
    function get_t_hebergement($id)
    {
        return $this->db->get_where('t_hebergement',array('id'=>$id))->row_array();
    }

    function get_t_hebergement_by_name($name)
    {
        return $this->db->get_where('t_hebergement',array('name'=>$name))->row_array();
    }
        
    /*
     * Get all t_hebergement
     */
    function get_all_t_hebergement()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('t_hebergement')->result_array();
    }

    /*
     * Get all t_hebergement
     */
    function get_all_t_hebergement_ip()
    {       
        $this->db->select(' t_theme.name as name');
        $this->db->from('t_domaine_theme_ip');
        $this->db->join('t_domaine', 't_domaine_theme_ip.id_domaine = t_domaine.id', 'inner');
        $this->db->join('t_theme', 't_domaine_theme_ip.id_theme = t_theme.id', 'inner');
        $this->db->where( 't_domaine.id', $id_domaine );   
        $this->db->order_by('id', 'desc');
        return $this->db->get('t_hebergement')->result_array();
    }
        
    /*
     * function to add new t_hebergement
     */
    function add_t_hebergement($params)
    {
        $this->db->insert('t_hebergement',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update t_hebergement
     */
    function update_t_hebergement($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('t_hebergement',$params);
    }
    
    /*
     * function to delete t_hebergement
     */
    function delete_t_hebergement($id)
    {
        return $this->db->delete('t_hebergement',array('id'=>$id));
    }
}
