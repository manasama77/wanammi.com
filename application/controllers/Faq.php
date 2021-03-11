<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_faq', 'mdb');
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
    $data['content'] = 'faq';
    $this->b_template($data);
  }

  public function create()
  {
    $data['content'] = 'faq_create';
    $this->b_template($data);
  }

  public function store()
  {
    $question = $this->input->post('question', TRUE);
    $answer   = $this->input->post('answer', TRUE);

    $arr = array(
      'question' => $question,
      'answer'   => $answer
    );

    $exec = $this->mdb->store($arr);

    if($exec === true){
      $result = array(
        'code'        => '200',
        'description' => 'Create New F.A.Q Success...'
      );
    }else{
      $result = array(
        'code'        => '400',
        'description' => 'Create New F.A.Q Failed...',
      );
    }

    echo json_encode($result);
  }

  public function edit()
  {
    $data['id_faq'] = $this->uri->segment(2);

    $arr_where = array(
      'id_faq' => $data['id_faq']
    );

    $arr = $this->mdb->get_data_where($arr_where)->result();
    foreach ($arr as $key) {
      $data['question'] = $key->question;
      $data['answer']   = $key->answer;
    }
    $data['content'] = 'faq_edit';
    $this->b_template($data);
  }

  public function update()
  {
    $id_faq   = $this->input->post('id_faq', TRUE);
    $question = $this->input->post('question', TRUE);
    $answer   = $this->input->post('answer', TRUE);

    

    $where = array(
      'id_faq' => $id_faq
    );

    $arr = array(
      'question' => $question,
      'answer'   => $answer
    );

    $exec = $this->mdb->update($where, $arr);

    if($exec === true){
      $result = array(
        'code'        => '200',
        'description' => 'Update F.A.Q Success...'
      );
    }else{
      $result = array(
        'code'        => '400',
        'description' => 'Update F.A.Q Failed...',
      );
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
        'description' => 'Delete F.A.Q Success...',
        'id' => $id
      );
    }else{
      $result = array(
        'code'        => '400',
        'description' => 'Delete F.A.Q Failed...'
      );
    }

    echo json_encode($result);
  }

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */