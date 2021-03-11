<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_contact', 'mdb');
  }

  public function b_template($data)
  {
    if($this->sess_check() === true){
      $this->load->view('template/index', $data);
    }else{
      redirect('logout','refresh');
    }
  }

  public function sess_check()
  {
    $username  = $this->session->userdata('username');
    $full_name = $this->session->userdata('full_name');
    if($username == null || $username == "" || $full_name == null || $full_name == "")
    {
      return false;
    }else{
      return true;
    }
  }

  /////////////////////////////////////////////////////////////////////////////////////////// GRAND LINE
  
  public function b_index()
  {
    $arr = $this->mdb->get_data()->result();

    foreach ($arr as $key) {
      $data['company_name'] = $key->company_name;
      $data['phone']        = $key->phone;
      $data['fax']          = $key->fax;
      $data['whatsapp']     = $key->whatsapp;
      $data['email']        = $key->email;
      $data['address']      = $key->address;
      $data['id_province']  = $key->id_province;
      $data['id_city']      = $key->id_city;
      $data['postal_code']  = $key->postal_code;
      $data['facebook']     = $key->facebook;
      $data['twitter']      = $key->twitter;
      $data['google_plus']  = $key->google_plus;
    }

    $data['arr_province'] = $this->mdb->get_list_province()->result();
    $data['content']      = 'contact';
    $this->b_template($data);
    
  }

  public function get_list_city()
  {
    $id_province = $this->input->get('id_province', TRUE);

    $arr = $this->mdb->get_list_city($id_province)->result();

    $data = array();
    if($arr){
      foreach ($arr as $key) {
        $nested = array(
          'id_city'   => $key->id_city,
          'type'      => $key->type,
          'city_name' => $key->city_name
        );

        array_push($data, $nested);
      }

      $return = array(
        'code'        => '200',
        'description' => "Success Get List City",
        'data'        => $data
      );

    }else{
      $return = array(
        'code'        => '500',
        'description' => "Can't access database City"
      );
    }
    
    echo json_encode($return);
  }

  public function update()
  {
    $company_name = $this->input->post('company_name', TRUE);
    $phone        = $this->input->post('phone', TRUE);
    $fax          = $this->input->post('fax', TRUE);
    $whatsapp     = $this->input->post('whatsapp', TRUE);
    $email        = $this->input->post('email', TRUE);
    $address      = $this->input->post('address', TRUE);
    $id_province  = $this->input->post('id_province', TRUE);
    $id_city      = $this->input->post('id_city', TRUE);
    $postal_code  = $this->input->post('postal_code', TRUE);
    $facebook     = $this->input->post('facebook', TRUE);
    $twitter      = $this->input->post('twitter', TRUE);
    $google_plus  = $this->input->post('google_plus', TRUE);

    $arr = array(
      'company_name' => $company_name,
      'phone'        => $phone,
      'fax'          => $fax,
      'whatsapp'     => $whatsapp,
      'email'        => $email,
      'address'      => $address,
      'id_province'  => $id_province,
      'id_city'      => $id_city,
      'postal_code'  => $postal_code,
      'facebook'     => $facebook,
      'twitter'      => $twitter,
      'google_plus'  => $google_plus
    );

    $exec = $this->mdb->update($arr);

    if($exec === true){
      $result = array(
        'code'        => '200',
        'description' => 'Update Contact Success...'
      );
    }else{
      $result = array(
        'code'        => '400',
        'description' => 'Update Contact Failed...'
      );
    }

    echo json_encode($result);
  }

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */