<?php
class Pendaftaran_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_pendaftaran_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('skck_registration');
		$this->db->join('skck_personaldata','skck_registration.id=skck_personaldata.id','left');
		$this->db->join('skck_education','skck_registration.id=skck_education.id','left');
		$this->db->join('skck_cirifisik','skck_registration.id=skck_cirifisik.id','left');
		$this->db->join('skck_family','skck_registration.id=skck_family.id','left');
		$this->db->join('skck_pelanggaran','skck_registration.id=skck_pelanggaran.id','left');
		$this->db->join('skck_documents','skck_registration.id=skck_documents.id','left');
		$this->db->where('skck_registration.id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }


    /**
    * Fetch pendaftaran data from the database
    * possibility to mix search, filter and order
    * @param int $pk_id 
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_pendaftaran($status_type=null, $searchString=null, $searchField=null, $searchOper = null, $limit_start = null, $limit_end = null)
    {
	    
		$this->db->select('*');
		
		$this->db->from('skck_registration');
		$this->db->join('skck_personaldata','skck_registration.id=skck_personaldata.id','left');
		
		if($status_type != null){
			$this->db->where('status_type', $status_type);
		}
		if($searchString != null){
			if($searchOper == 'cn')
				$this->db->like($searchField, $searchString);
			elseif($searchOper == 'eq')
				$this->db->where($searchField, $searchString);
			else
				$this->db->like($searchField, $searchString);
		}
		
		

		$this->db->limit($limit_start, $limit_end);
		//$this->db->limit(20, 0);
		
		$query = $this->db->get();
		
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $status_type
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_pendaftaran($status_type=null, $searchString=null, $searchField=null, $searchOper = null)
    {
		$this->db->select('*');
		$this->db->from('skck_registration');
		$this->db->join('skck_personaldata','skck_registration.id=skck_personaldata.id','left');
		
		if($status_type != null){
			$this->db->where('status_type', $status_type);
		}
		if($searchString != null){
			if($searchOper == 'cn')
				$this->db->like($searchField, $searchString);
			elseif($searchOper == 'eq')
				$this->db->where($searchField, $searchString);
			else
				$this->db->like($searchField, $searchString);
		}
		
		
		$query = $this->db->get();
		return $query->num_rows();        
    }
	
	function update_reg($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('skck_registration', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function update_personaldata($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('skck_personaldata', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function update_cirifisik($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('skck_cirifisik', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function update_education($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('skck_education', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function update_pelanggaran($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('skck_pelanggaran', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function update_keterangan($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('skck_keterangan', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function update_family($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('skck_family', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function update_documents($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('skck_documents', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	
	function store_registration($data)
	{
		$this->db->insert('skck_registration', $data);
	    return $this->db->insert_id();
	}
	
	function store_personaldata($data)
	{
		$this->db->insert('skck_personaldata', $data);
	    return $this->db->insert_id();
	}
	
	function store_documents($data)
	{
		$ret = $this->db->insert('skck_documents', $data);
		return $ret;
	}
	
	function store_family($data)
	{
		$ret = $this->db->insert('skck_family', $data);
		return $ret;
	}
	
	function store_keterangan($data)
	{
		$ret = $this->db->insert('skck_keterangan', $data);
		return $ret;
	}
	
	function store_pelanggaran($data)
	{
		$ret = $this->db->insert('skck_pelanggaran', $data);
		return $ret;
	}
	
	function store_education($data)
	{
		$ret = $this->db->insert('skck_education', $data);
		return $ret;
	}
	
	function store_cirifisik($data)
	{
		$ret = $this->db->insert('skck_cirifisik', $data);
		return $ret;
	}

    
	function delete_registration($id){
		$this->db->where('id', $id);
		$this->db->delete('skck_registration'); 
	}
 
}
?>