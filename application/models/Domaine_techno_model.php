<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Domaine_techno_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get t_domaine_techno by id
     */
    function get_t_domaine_techno($id)
    {
        return $this->db->get_where('t_domaine_techno',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all t_domaine_techno
     */
    function get_all_t_domaine_techno()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('t_domaine_techno')->result_array();
    }
        
    /*
     * function to add new t_domaine_techno
     */
    function add_t_domaine_techno($params)
    {
        $this->db->insert('t_domaine_techno',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update t_domaine_techno
     */
    function update_t_domaine_techno($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('t_domaine_techno',$params);
    }
    
    /*
     * function to delete t_domaine_techno
     */
    function delete_t_domaine_techno($id)
    {
        return $this->db->delete('t_domaine_techno',array('id'=>$id));
    }
}
