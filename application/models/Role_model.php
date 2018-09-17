<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Role_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get t_role by id
     */
    function get_t_role($id)
    {
        return $this->db->get_where('t_role',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all t_role
     */
    function get_all_t_role()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('t_role')->result_array();
    }
        
    /*
     * function to add new t_role
     */
    function add_t_role($params)
    {
        $this->db->insert('t_role',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update t_role
     */
    function update_t_role($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('t_role',$params);
    }
    
    /*
     * function to delete t_role
     */
    function delete_t_role($id)
    {
        return $this->db->delete('t_role',array('id'=>$id));
    }
}
