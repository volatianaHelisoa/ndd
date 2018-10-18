<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Type_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get t_type by id_type
     */
    function get_t_type($id_type)
    {
        return $this->db->get_where('t_type',array('id_type'=>$id_type))->row_array();
    }
        
    /*
     * Get all t_type
     */
    function get_all_t_type()
    {
        $this->db->order_by('id_type', 'desc');
        return $this->db->get('t_type')->result_array();
    }
        
    /*
     * function to add new t_type
     */
    function add_t_type($params)
    {
        $this->db->insert('t_type',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update t_type
     */
    function update_t_type($id_type,$params)
    {
        $this->db->where('id_type',$id_type);
        return $this->db->update('t_type',$params);
    }
    
    /*
     * function to delete t_type
     */
    function delete_t_type($id_type)
    {
        return $this->db->delete('t_type',array('id_type'=>$id_type));
    }
}