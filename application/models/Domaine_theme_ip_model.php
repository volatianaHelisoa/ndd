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
}
