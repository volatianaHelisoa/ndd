<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ip_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get t_ip by id
     */
    function get_t_ip($id)
    {
        return $this->db->get_where('t_ip',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all t_ip
     */
    function get_all_t_ip()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('t_ip')->result_array();
    }
        
    /*
     * function to add new t_ip
     */
    function add_t_ip($params)
    {
        $this->db->insert('t_ip',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update t_ip
     */
    function update_t_ip($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('t_ip',$params);
    }
    
    /*
     * function to delete t_ip
     */
    function delete_t_ip($id)
    {
        return $this->db->delete('t_ip',array('id'=>$id));
    }
}
