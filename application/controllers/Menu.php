<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_menu', 'mdb');
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
    $data['arr']     = $this->mdb->get_data()->result();
    $data['content'] = 'menu';
    $this->b_template($data);
  }

  public function create()
  {
    $data['content'] = 'menu_create';
    $this->b_template($data);
  }

  public function store()
  {
    if($_FILES['picture']['name'] != null){
      $config['upload_path']   = './assets/img/menu/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['encrypt_name']  = TRUE;

      $this->load->library('upload', $config);

      if($this->upload->do_upload('picture'))
      {
        $file_name   = $this->upload->data()['file_name'];
        $description = $this->input->post('description');

        $arr = array(
          'picture'     => $file_name,
          'description' => $description
        );

        $exec = $this->mdb->store($arr);

        if($exec === true){
          $result = array(
            'code'        => '200',
            'description' => 'Create New Menu Success...'
          );
        }else{
          $result = array(
            'code'        => '400',
            'description' => 'Create New Menu Failed...',
          );
        }
      }else{
        $result = array(
          'code'        => '400',
          'description' => 'Upload New Picture Failed...',
        );
      }

    }else{
      $result = array(
        'code'        => '400',
        'description' => 'Upload New Picture Failed...',
      );
    }

    echo json_encode($result);
  }

  public function edit()
  {
    $data['id_menu'] = $this->uri->segment(2);

    $arr_where = array(
      'id_menu' => $data['id_menu']
    );

    $arr = $this->mdb->get_data_where($arr_where)->result();
    foreach ($arr as $key) {
      $data['picture'] = $key->picture;
      $data['description']   = $key->description;
    }
    $data['content'] = 'menu_edit';
    $this->b_template($data);
  }

  public function update()
  {
    if($_FILES['picture']['name'] != null){
      $config['upload_path']   = './assets/img/menu/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['encrypt_name']  = TRUE;

      $this->load->library('upload', $config);

      if($this->upload->do_upload('picture'))
      {
        $file_name   = $this->upload->data()['file_name'];
        $id_menu = $this->input->post('id_menu');
        $description = $this->input->post('description');

        $where = array(
          'id_menu' => $id_menu
        );

        $arr = array(
          'picture'     => $file_name,
          'description' => $description
        );

        $exec = $this->mdb->update($where, $arr);

        if($exec === true){
          $result = array(
            'code'        => '200',
            'description' => 'Update Menu Success...'
          );
        }else{
          $result = array(
            'code'        => '400',
            'description' => 'Update Menu Failed...',
          );
        }
      }else{
        $result = array(
          'code'        => '400',
          'description' => 'Upload New Picture Failed...',
        );
      }

    }else{
      $id_menu = $this->input->post('id_menu');
      $description = $this->input->post('description');

      $where = array(
        'id_menu' => $id_menu
      );

      $arr = array(
        'description' => $description
      );

      $exec = $this->mdb->update($where, $arr);

      if($exec === true){
        $result = array(
          'code'        => '200',
          'description' => 'Update Menu Success...'
        );
      }else{
        $result = array(
          'code'        => '400',
          'description' => 'Update Menu Failed...',
        );
      }
    }

    echo json_encode($result);
  }

  public function destroy()
  {
    $id = $this->input->post('id');

    $exec = $this->mdb->destroy($id);

    if($exec === true){
      $result = array(
        'code'        => '200',
        'description' => 'Delete Menu Success...',
        'id' => $id
      );
    }else{
      $result = array(
        'code'        => '400',
        'description' => 'Delete Menu Failed...'
      );
    }

    echo json_encode($result);
  }

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */