<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_main', 'mdb');
    $this->load->model('m_visit', 'mvisit');
    $this->kunjungan();
  }

  public function index()
  {
    $data['profile_title']   = $this->mdb->get_all_data('apm_profile')->row('title');
    $data['profile_content'] = $this->mdb->get_all_data('apm_profile')->row('content');
    $data['profile_path']    = $this->mdb->get_all_data('apm_profile')->row('path');
    $data['arr_menu']        = $this->mdb->get_all_data('apm_menu')->result();
    $data['arr_gallery']     = $this->mdb->get_all_data('apm_gallery')->result();
    $data['arr_faq']         = $this->mdb->get_all_data('apm_faq')->result();
    // PART CONTACT
    $data['company_name']    = $this->mdb->get_all_data('apm_contact')->row('company_name');
    $data['phone']           = $this->mdb->get_all_data('apm_contact')->row('phone');
    $data['fax']             = $this->mdb->get_all_data('apm_contact')->row('fax');
    $data['whatsapp']        = $this->mdb->get_all_data('apm_contact')->row('whatsapp');
    $data['email']           = $this->mdb->get_all_data('apm_contact')->row('email');
    $data['email']           = $this->mdb->get_all_data('apm_contact')->row('email');
    $data['address']         = $this->mdb->get_all_data('apm_contact')->row('address');
    $data['postal_code']     = $this->mdb->get_all_data('apm_contact')->row('postal_code');
    $data['facebook']        = $this->mdb->get_all_data('apm_contact')->row('facebook');
    $data['twitter']         = $this->mdb->get_all_data('apm_contact')->row('twitter');
    $data['google_plus']     = $this->mdb->get_all_data('apm_contact')->row('google_plus');
    // END PART CONTACT
    $this->load->view('frontend/index', $data);
  }

  ######################################################## KUNJUNGAN
  public function kunjungan()
  {
    $ip_address     = $this->input->ip_address();
    $browser        = $this->input->user_agent();
    $cek_ip_address = $this->mvisit->cek_ip_address($ip_address, $browser);
    $data = array(
      'ip_address' => $ip_address,
      'date'       => date('Y-m-d H:i:s'),
      'browser'    => $this->input->user_agent()
    );

    if($cek_ip_address->num_rows() == 0){
      $proses_kunjungan = $this->mvisit->create($data);
    }else{
      $id_visit         = $cek_ip_address->row('id_visit');
      $proses_kunjungan = $this->mvisit->update($data, $id_visit);
    }
  }
  ######################################################## END KUNJUNGAN  

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */