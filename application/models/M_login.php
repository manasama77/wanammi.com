<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

  private $table = "apm_admin";

  public function count_all_results($field, $keyword)
  {
    $this->db->from($this->table);
    $this->db->where($field, $keyword);
    return $this->db->count_all_results();
  }

  public function check_status($field, $keyword)
  {
    $this->db->select('status');
    $this->db->from($this->table);
    $this->db->where($field, $keyword);
    return $this->db->get();
  }

  public function get_single_data_where($select, $field_where, $keyword_where)
  {
    $this->db->select($select);
    $this->db->from($this->table);
    $this->db->where($field_where, $keyword_where);
    return $this->db->get();
  }

  public function create_admin($data)
  {
    $this->db->trans_start();
    $this->db->insert( $this->table, $data );
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function get_all_data_admin()
  {
    return $this->db->get('apm_admin');
  }

  public function destroy($id)
  {
    $this->db->trans_start();
    $this->db->where('id_admin', $id);
    $this->db->delete($this->table);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function update_status($id, $new_status)
  {
    $this->db->trans_start();
    $this->db->set('status', $new_status);
    $this->db->where('id_admin', $id);
    $this->db->update($this->table);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function update($where, $data)
  {
    $this->db->trans_start();
    $this->db->where($where);
    $this->db->update($this->table, $data);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */