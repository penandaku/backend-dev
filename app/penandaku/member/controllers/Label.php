<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Label extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      //load library
      $this->load->library('form_validation');
      //load model
      $this->load->model('member');
  }

  public function index()
  {
    if($this->member->member_id())
    {
      $data = array (
                'title'       => 'Kelola Label &rsaquo; Penandaku.com',
                'label'       => TRUE,
                'data_label'  => $this->member->GetAll()
      );
      $this->load->view('part/header', $data);
      $this->load->view('part/sidebar');
      $this->load->view('layout/label/data_label');
      $this->load->view('part/footer');
    }else{
      show_404();
      return FALSE;
    }
  }

  public function add()
  {
    if($this->member->member_id())
    {
      //set form validation
      $this->form_validation->set_rules('nama_label', 'Nama Label', 'trim|required');
      $this->form_validation->set_rules('descriptions', 'Descriptions', 'trim|required');
      //set messege form validation
      $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto"><i class="fa fa-exclamation-circle"></i> {field} harus diisi.</div>');
      if($this->form_validation->run() == TRUE)
      {
        $nama_label   = $this->input->post("nama_label");
        $descriptions = $this->input->post("descriptions");
        $type         = $this->input->post("type");
        //kondisi type add
        if($type == "add")
        {
          $insert = array(
                      'member_id'   => $this->session->userdata('member_id'),
                      'nama_label'  => $this->input->post('nama_label'),
                      'slug'        => url_title(strtolower($this->input->post('nama_label'))),
                      'descriptions'=> $this->input->post('descriptions')
          );
          $this->member->insert_label($insert);
          //create session flashdata
          $this->session->set_flashdata('notif', '');
          redirect('member/label/');
        //kondisi type edit
        }elseif($type == "edit"){
          //get id from form
          $id = $this->input->post('id');
          $update = array(
                      'member_id'   => $this->session->userdata('member_id'),
                      'nama_label'  => $this->input->post('nama_label'),
                      'slug'        => url_title(strtolower($this->input->post('nama_label'))),
                      'descriptions'=> $this->input->post('descriptions')
          );
          $this->member->update_label($update, $id);
          //crete session flashdata
          $this->session->set_flashdata('notif', '');
          redirect('member/label/');
        }else{
          //redirect
          redirect('member/label/add/');
          return FLASE;
        }
      }else{
        $data = array (
                  'title'       => 'Add Label &rsaquo; Penandaku.com',
                  'label'   => TRUE
        );
        $sub_data = array (
                      'type'          => 'add',
                      'id_label'      => '',
                      'nama_label'    => '',
                      'descriptions'  => ''
        );
        $this->load->view('part/header', $data);
        $this->load->view('part/sidebar');
        $this->load->view('layout/label/form_label', $sub_data);
        $this->load->view('part/footer');
      }

    }else{
      show_404();
      return FALSE;
    }
  }

  public function edit($param)
  {
    /*
    *@param : get id detail data
    */
  }

}
