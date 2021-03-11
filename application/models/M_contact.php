<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {

  public function get_data()
  {
    return $this->db->get('apm_contact');
  }

  public function get_list_province()
  {
    $this->db->order_by('province', 'ASC');
    return $this->db->get('apm_province');
  }

  public function get_list_city($id_province)
  {
    $this->db->where('id_province', $id_province);
    $this->db->order_by('type', 'ASC');
    return $this->db->get('apm_city');
  }

  public function update($data)
  {
    $this->db->trans_start();
    $this->db->where('id_contact', '1');
    $this->db->update('apm_contact', $data);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

}

/* End of file M_profile.php */
/* Location: ./application/models/M_profile.php */