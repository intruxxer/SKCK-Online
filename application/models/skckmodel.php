<?php 

class Skckmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function search_skck_registration($id)
    {
        return $this->db->get_where('skck_registration', array('application_id' => $id))->result();

    }

    function create_skck_registration($data=array())
    {
        $this->db->trans_start();
        $this->db->insert('skck_registration', $data);
        $skck_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $skck_id;
    }

    function add_skck_personaldata($data=array())
    {
        return $this->db->insert('skck_personaldata', $data);
    }

    function add_skck_family($data=array())
    {
        return $this->db->insert('skck_family', $data);
    }

    function add_skck_education($data=array())
    {
        return $this->db->insert('skck_education', $data);
    }

    function add_skck_pelanggaran($data=array())
    {
        return $this->db->insert('skck_pelanggaran', $data);
    }

    function add_skck_cirifisik($data=array())
    {
        return $this->db->insert('skck_cirifisik', $data);
    }

    function add_skck_documents($data=array())
    {
        return $this->db->insert('skck_documents', $data);
    }

    function add_skck_keterangan($data=array())
    {
        return $this->db->insert('skck_keterangan', $data);
    }

}