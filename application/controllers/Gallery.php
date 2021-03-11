<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_gallery', 'mdb');
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
    $data['content'] = 'gallery';
    $this->b_template($data);
  }

  public function create()
  {
    $data['content'] = 'gallery_create';
    $this->b_template($data);
  }

  public function store()
  {
    if($_FILES['path']['name'] != null){
      $config['upload_path']   = './assets/img/gallery/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['encrypt_name']  = TRUE;

      $this->load->library('upload', $config);

      if($this->upload->do_upload('path'))
      {
        $file_name = $this->upload->data()['file_name'];

        $arr = array(
          'path' => $file_name
        );

        $exec = $this->mdb->store($arr);

        if($exec === true){
          $result = array(
            'code'        => '200',
            'description' => 'Upload New Picture Success...'
          );
        }else{
          $result = array(
            'code'        => '400',
            'description' => 'Upload New Picture Failed...',
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
      $result = array(
        'code'        => '400',
        'description' => 'Upload New Picture Failed...',
      );
    }
    
    echo json_encode($result);
  }

  public function update()
  {
    $title = $this->input->post('title', TRUE);
    $isi   = $this->input->post('content', TRUE);

    $arr = array(
      'title'   => $title,
      'content' => $isi
    );

    $exec = $this->mdb->update($arr);

    if($exec === true){
      $result = array(
        'code'        => '200',
        'description' => 'Update F.A.Q Success...'
      );
    }else{
      $result = array(
        'code'        => '400',
        'description' => 'Update F.A.Q Failed...',
        'title' => $title,
        'content' => $isi,
      );
    }

    echo json_encode($result);
  }

  public function destroy()
  {
    $id   = $this->input->post('id', TRUE);
    $path = $this->input->post('path');

    $exec = $this->mdb->destroy($id);
    $exec = true;

    if($exec === true){
      unlink('./assets/img/gallery/'.$path);
      $result = array(
        'code'        => '200',
        'description' => 'Delete Picture Success...',
        'id' => $id
      );
    }else{
      $result = array(
        'code'        => '400',
        'description' => 'Delete Picture Failed...'
      );
    }

    echo json_encode($result);
  }

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */