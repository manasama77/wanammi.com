<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_profile', 'mdb');
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
      $data['title'] = $key->title;
      $data['isi']   = str_replace('<br />', '', $key->content);
      $data['path']  = $key->path;
    }

    $data['content'] = 'profile';
    $this->b_template($data);
  }

  public function update()
  {
    $title     = $this->input->post('title', TRUE);
    $content   = nl2br($this->input->post('content'));

    if($_FILES['path']['name'] != null){
      $config['upload_path']   = './assets/img/profile/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['encrypt_name']  = TRUE;

      $this->load->library('upload', $config);

      if($this->upload->do_upload('path'))
      {
        $file_name = $this->upload->data()['file_name'];

        $arr = array(
          'title'   => $title,
          'content' => $content,
          'path'    => $file_name
        );

        $exec = $this->mdb->update($arr);

        if($exec === true){
          $result = array(
            'code'        => '200',
            'description' => 'Update Profile Success...'
          );
        }else{
          $result = array(
            'code'        => '400',
            'description' => 'Update Profile Failed...',
          );
        }

      }
      else
      {
        $result = array(
          'code'        => '400',
          'description' => $this->upload->display_errors()
        );

      }

    }else{
      $arr = array(
        'title'   => $title,
        'content' => $content
      );

      $exec = $this->mdb->update($arr);

      if($exec === true){
        $result = array(
          'code'        => '200',
          'description' => 'Update Profile Success...'
        );
      }else{
        $result = array(
          'code'        => '400',
          'description' => 'Update Profile Failed...',
        );
      }
    }
    
    echo json_encode($result);

  }

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */