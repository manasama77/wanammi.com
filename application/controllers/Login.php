<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Class untuk membuat laporan

class Login extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_login', 'mlogin');
    $this->load->model('m_visit', 'mvisit');
    //$this->kunjungan();
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

  public function index()
  {
    $this->load->view('template/login');
  }

  public function auth()
  {
    $username = $this->input->post('username', TRUE);
    $password = $this->input->post('password', TRUE);

    $count_username = $this->count_rows_db('username', $username); // COUNT ROWS

    if($count_username == 0){ // IF USERNAME NOT FOUND IN DB
      $return = array(
        'code'        => 400,
        'description' => "Username Not Found",
        'username'    => $username,
        'password'    => $password
      );
    }elseif($count_username == 1){

      $status = $this->check_status('username', $username);

      if($status == 1){
        $password_db = $this->get_single_data_where('password', 'username', $username);

        if(password_verify($password, $password_db)){

          $full_name = $this->get_single_data_where('full_name', 'username', $username);

          // SET SESSION
          $arr_sess = array(
            'username'  => $username,
            'full_name' => $full_name
          );

          $this->session->set_userdata($arr_sess);
          // END SET SESSION

          // SET FLASH SESSION
          $this->session->set_flashdata('first', 'true');
          // END SET FLASH SESSION

          $return = array(
            'code'        => 200,
            'description' => "Data Match, Process Signin Begin...",
            'username'    => $username,
            'password'    => $password,
            'status'      => $status,
            'full_name'   => $full_name
          );
        }else{
          $return = array(
            'code'        => 400,
            'description' => "Wrong Password...",
            'username'    => $username,
            'password'    => $password,
            'status'      => $status
          );
        }

      }else{
        $return = array(
          'code'        => 500,
          'description' => "Username Status Not Active",
          'username'    => $username,
          'password'    => $password,
          'status'      => $status
        );
      }
      
    }else{
      $return = array(
        'code'        => 400,
        'description' => "Username Duplicate",
        'username'    => $username,
        'password'    => $password
      );
    }

    echo json_encode($return);
  }

  public function count_rows_db($field, $keyword)
  {
    return $this->mlogin->count_all_results($field, $keyword);
  }

  public function check_status($field, $keyword)
  {
    return $this->mlogin->check_status($field, $keyword)->row('status');
  }

  public function get_single_data_where($select, $field_where, $keyword_where)
  {
    return $this->mlogin->get_single_data_where($select, $field_where, $keyword_where)->row($select);
  }


  public function dashboard()
  {
    if($this->session->userdata('username') && $this->session->userdata('full_name')){
      //print_r($this->session);
      $data['count_visit']       = $this->mvisit->count_all_visit();
      $data['count_visit_today'] = $this->mvisit->count_visit(date('Y-m-d'));
      $data['content']           = "dashboard_sample";
      $this->load->view('template/index', $data);
    }else{
      $this->logout();
    }
  }

  public function logout()
  {
    $arr = array(
      'username',
      'full_name'
    );
    $this->session->unset_userdata($arr);

    // SET FLASH SESSION
    $this->session->set_flashdata('logout', 'true');
    // END SET FLASH SESSION

    redirect('login');
  }

  public function manage()
  {
    $data['arr']     = $this->mlogin->get_all_data_admin()->result();
    $data['content'] = "manage";
    $this->b_template($data);
  }

  public function store()
  {
    $username  = $this->input->post('c_username', TRUE);
    $password  = $this->input->post('c_password', TRUE);
    $full_name = $this->input->post('c_full_name', TRUE);

    $count_username = $this->mlogin->count_all_results('username', $username);

    if($count_username == 0){
      $password_hash = $password = password_hash($password, PASSWORD_BCRYPT);
      $data = array(
        'username'  => $username,
        'password'  => $password_hash,
        'full_name' => $full_name,
        'status'    => 1
      );

      $exec = $this->mlogin->create_admin($data);

      if($exec === true){
        $return = array(
          'code'        => '200',
          'description' => 'Create Account Success...'
        );
      }else{
        $return = array(
          'code'        => '400',
          'description' => 'Create Account Failed...'
        );
      }

    }else{
      $return = array(
        'code'        => '400',
        'description' => 'Username Telah Digunakan...'
      );
    }

    echo json_encode($return);
  }

  public function destroy()
  {
    $id = $this->input->get('id');
    $exec = $this->mlogin->destroy($id);

    if($exec === true){
      $return = array(
        'code'        => '200',
        'description' => 'Delete Account Success...'
      );
    }else{
      $return = array(
        'code'        => '400',
        'description' => 'Delete Account Failed...'
      );
    }

    echo json_encode($return);
  }

  public function update_status()
  {
    $id = $this->input->get('id', TRUE);

    $cur_status = $this->mlogin->check_status('id_admin', $id)->row('status');

    if($cur_status == 1){
      $new_status = 0;
    }else{
      $new_status = 1;
    }

    $exec = $this->mlogin->update_status($id, $new_status);

    if($exec === true){
      $return = array(
        'code'        => '200',
        'description' => 'Update Status Account Success...'
      );
    }else{
      $return = array(
        'code'        => '400',
        'description' => 'Update Status Account Failed...'
      );
    }

    echo json_encode($return);
  }

  public function reset_password()
  {
    $id_admin     = $this->input->post('id_admin', TRUE);
    $new_password = $this->input->post('new_password', TRUE);
    $new_password = password_hash($new_password, PASSWORD_BCRYPT);

    $where = array(
      'id_admin' => $id_admin
    );

    $arr = array(
      'password' => $new_password
    );

    $exec = $this->mlogin->update($where, $arr);

    if($exec === true){
      $return = array(
        'code'        => '200',
        'description' => 'Reset Password Success...'
      );
    }else{
      $return = array(
        'code'        => '400',
        'description' => 'Reset Password Failed...'
      );
    }

    echo json_encode($return);
  }

  ///////////////////////////////////////////////////////////////////////////////////////////////////// RED LINE

  public function mockup()
  {
    $password = "admin";
    $password = password_hash($password, PASSWORD_BCRYPT);
    $data = array(
      'username'  => 'admin',
      'password'  => $password,
      'full_name' => 'Administrator',
      'status'    => 1
    );

    $this->mlogin->create_admin($data);
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

  public function get_data_visit()
  {
    $data = array(
      'chartData' => ''
    );

    $max_dates  = 1;
    $countDates = -4;
    while ($countDates < $max_dates) {
      $NewDate    = Date('Y-m-d', strtotime($countDates." days"));
      $arr_date[] = $NewDate;

      $count_data       = $this->mvisit->count_visit($NewDate);
      $arr_week_visit[] = $count_data;

      $countDates += 1;
    }
    $data['labels']   = $arr_date;
    $data['thisWeek'] = $arr_week_visit;
    echo json_encode($data);
  }
  ######################################################## END KUNJUNGAN  

  
}