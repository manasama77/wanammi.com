<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visit extends CI_Model {

  public function count_all_visit()
  {
    $this->db->from('apm_visit');
    return $this->db->count_all_results();
  }

  public function count_visit($date)
  {
    $this->db->from('apm_visit');
    $this->db->where('date', $date);
    return $this->db->count_all_results();
  }

  public function cek_ip_address($ip_address, $browser)
  {
    $cur_date = date('Y-m-d');
    $this->db->where('ip_address', $ip_address);
    $this->db->where('browser', $browser);
    $this->db->where('date', $cur_date);
    return $this->db->get('apm_visit');
  }

  public function create($data)
  {
    return $this->db->insert('apm_visit', $data);
  }

  public function update($data, $id_visit)
  {
    $this->db->where('id_visit', $id_visit);
    return $this->db->update('apm_visit', $data);
  }

}

/* End of file M_visit.php */
/* Location: ./application/models/M_visit.php */