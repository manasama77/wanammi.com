<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {

  public function get_data()
  {
    return $this->db->get('apm_profile');
  }

  public function update($data)
  {
    $this->db->trans_start();
    $this->db->where('id_profile', '1');
    $this->db->update('apm_profile', $data);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

}

/* End of file M_profile.php */
/* Location: ./application/models/M_profile.php */