<?php

class Skckmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function matching_noreg_to_id($id, $noreg)
    {
        $this->db->select('id');
        $theId = $this->db->get_where('skck_registration', array('application_id' => $noreg))->row();
        if($theId->id == $id) return true;
        else if(count($theId) < 0) return false;
        else return false;
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

    function get_skck_registration($id)
    {
        return $this->db->get_where('skck_registration', array('id' => $id))->result();
    }

    function get_skck_registration_id_by_applicant_or_application_id($applicantid=null, $applicationid=null)
    {
            $this->db->select('id');
            $this->db->from('skck_registration');
            $this->db->where('applicant_id', $applicantid);
            $this->db->where('application_id', $applicationid);
            return $this->db->get()->row();
    }

    function update_skck_registration($id, $data=array())
    {
            $this->db->trans_start();
            $this->db->update('skck_registration', $data, array('id' => $id));
            $this->db->trans_complete();
            // was there any update or error?
            if ($this->db->affected_rows() >= '0') {
                //0 for update with no changes, 1 or greater is for changes happen
                return true;
            } else {
                //check for any trans error
                if ($this->db->trans_status() === FALSE) {
                    return false;
                }
                return true;
            }
    }

    function delete_skck_registration($id)
    {
        return $this->db->delete('skck_registration', array('id' => $id));
    }

    function add_skck_personaldata($data=array())
    {
        return $this->db->insert('skck_personaldata', $data);
    }

    function get_skck_personaldata($id)
    {
        return $this->db->get_where('skck_personaldata', array('id' => $id))->result();
    }

    function update_skck_personaldata($id, $data=array())
    {
            $this->db->trans_start();
            $this->db->update('skck_personaldata', $data, array('id' => $id));
            $this->db->trans_complete();
            // was there any update or error?
            if ($this->db->affected_rows() >= '0') {
                //0 for update with no changes, 1 or greater is for changes happen
                return true;
            } else {
                //check for any trans error
                if ($this->db->trans_status() === FALSE) {
                    return false;
                }
                return true;
            }
    }

    function add_skck_family($data=array())
    {
        return $this->db->insert('skck_family', $data);
    }

    function get_skck_family($id)
    {
        return $this->db->get_where('skck_family', array('id' => $id))->result();
    }

    function update_skck_family($id, $data=array())
    {
        $this->db->trans_start();
            $this->db->update('skck_family', $data, array('id' => $id));
            $this->db->trans_complete();
            // was there any update or error?
            if ($this->db->affected_rows() >= '0') {
                //0 for update with no changes, 1 or greater is for changes happen
                return true;
            } else {
                //check for any trans error
                if ($this->db->trans_status() === FALSE) {
                    return false;
                }
                return true;
            }
    }

    function add_skck_education($data=array())
    {
        return $this->db->insert('skck_education', $data);
    }

    function get_skck_education($id)
    {
        return $this->db->get_where('skck_education', array('id' => $id))->result();
    }

    function update_skck_education($id, $data=array())
    {
        $this->db->trans_start();
            $this->db->update('skck_education', $data, array('id' => $id));
            $this->db->trans_complete();
            // was there any update or error?
            if ($this->db->affected_rows() >= '0') {
                //0 for update with no changes, 1 or greater is for changes happen
                return true;
            } else {
                //check for any trans error
                if ($this->db->trans_status() === FALSE) {
                    return false;
                }
                return true;
            }
    }

    function add_skck_pelanggaran($data=array())
    {
        return $this->db->insert('skck_pelanggaran', $data);
    }

    function get_skck_pelanggaran($id)
    {
        return $this->db->get_where('skck_pelanggaran', array('id' => $id))->result();
    }

    function update_skck_pelanggaran($id, $data=array())
    {
        $this->db->trans_start();
            $this->db->update('skck_pelanggaran', $data, array('id' => $id));
            $this->db->trans_complete();
            // was there any update or error?
            if ($this->db->affected_rows() >= '0') {
                //0 for update with no changes, 1 or greater is for changes happen
                return true;
            } else {
                //check for any trans error
                if ($this->db->trans_status() === FALSE) {
                    return false;
                }
                return true;
            }
    }

    function add_skck_cirifisik($data=array())
    {
        return $this->db->insert('skck_cirifisik', $data);
    }

    function get_skck_cirifisik($id)
    {
        return $this->db->get_where('skck_cirifisik', array('id' => $id))->result();
    }

    function update_skck_cirifisik($id, $data=array())
    {
        $this->db->trans_start();
            $this->db->update('skck_cirifisik', $data, array('id' => $id));
            $this->db->trans_complete();
            // was there any update or error?
            if ($this->db->affected_rows() >= '0') {
                //0 for update with no changes, 1 or greater is for changes happen
                return true;
            } else {
                //check for any trans error
                if ($this->db->trans_status() === FALSE) {
                    return false;
                }
                return true;
            }
    }

    function add_skck_documents($data=array())
    {
        return $this->db->insert('skck_documents', $data);
    }

    function get_skck_documents($id)
    {
        return $this->db->get_where('skck_documents', array('id' => $id))->result();
    }

    function update_skck_documents($id, $data=array())
    {
        $this->db->trans_start();
            $this->db->update('skck_documents', $data, array('id' => $id));
            $this->db->trans_complete();
            // was there any update or error?
            if ($this->db->affected_rows() >= '0') {
                //0 for update with no changes, 1 or greater is for changes happen
                return true;
            } else {
                //check for any trans error
                if ($this->db->trans_status() === FALSE) {
                    return false;
                }
                return true;
            }
    }

    function add_skck_keterangan($data=array())
    {
        return $this->db->insert('skck_keterangan', $data);
    }

    function get_skck_keterangan($id)
    {
        return $this->db->get_where('skck_keterangan', array('id' => $id))->result();
    }

    function update_skck_keterangan($id, $data=array())
    {
        $this->db->trans_start();
            $this->db->update('skck_keterangan', $data, array('id' => $id));
            $this->db->trans_complete();
            // was there any update or error?
            if ($this->db->affected_rows() >= '0') {
                //0 for update with no changes, 1 or greater is for changes happen
                return true;
            } else {
                //check for any trans error
                if ($this->db->trans_status() === FALSE) {
                    return false;
                }
                return true;
            }
    }

}
