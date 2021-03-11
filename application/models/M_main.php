<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_main extends CI_Model {

  public function get_all_data($table)
  {
    return $this->db->get($table);
  }

}

/* End of file M_main.php */
/* Location: ./application/models/M_main.php */