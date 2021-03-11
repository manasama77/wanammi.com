<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gallery extends CI_Model {

  public function get_data()
  {
    return $this->db->get('apm_gallery');
  }

  public function store($data)
  {
    $this->db->trans_start();
    $this->db->insert('apm_gallery', $data);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function update($data)
  {
    $this->db->trans_start();
    $this->db->where('id_gallery', '1');
    $this->db->update('apm_gallery', $data);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function destroy($id)
  {
    $this->db->trans_start();
    $this->db->where('id_gallery', $id);
    $this->db->delete('apm_gallery');
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

}

/* End of file M_profile.php */
/* Location: ./application/models/M_profile.php */