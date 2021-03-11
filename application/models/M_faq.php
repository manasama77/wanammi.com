<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faq extends CI_Model {

  public function get_data()
  {
    return $this->db->get('apm_faq');
  }

  public function get_data_where($where)
  {
    $this->db->where($where);
    return $this->db->get('apm_faq');
  }

  public function store($data)
  {
    $this->db->trans_start();
    $this->db->insert('apm_faq', $data);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function update($where, $arr)
  {
    $this->db->trans_start();
    $this->db->where($where);
    $this->db->update('apm_faq', $arr);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function destroy($id)
  {
    $this->db->trans_start();
    $this->db->where('id_faq', $id);
    $this->db->delete('apm_faq');
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

}

/* End of file M_profile.php */
/* Location: ./application/models/M_profile.php */