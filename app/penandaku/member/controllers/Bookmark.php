<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Bookmark extends CI_Controller {

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
                'title'       => 'Kelola Bookmark &rsaquo; Penandaku.com',
                'bookmark'    => TRUE
      );
      $this->load->view('part/header', $data);
      $this->load->view('part/sidebar');
      $this->load->view('layout/bookmark/data_bookmark');
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
      $this->form_validation->set_rules('judul_bookmark', 'Judul Bookmark', 'trim|required');
      $this->form_validation->set_rules('label_bookmark', 'Label Bookmark', 'trim|required');
      $this->form_validation->set_rules('url_bookmark', 'URL Bookmark', 'trim|required');
      $this->form_validation->set_rules('descriptions', 'Descriptions', 'trim|required');
      //set messege form validation
      $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto"><i class="fa fa-exclamation-circle"></i> {field} harus diisi.</div>');
      if($this->form_validation->run() == TRUE)
      {
        $judul_bookmark  = $this->input->post("judul_bookmark");
        $label_bookmark  = $this->input->post("label_bookmark");
        $url_bookmark    = $this->input->post("url_bookmark");
        $descriptions    = $this->input->post("descriptions");
        $type         = $this->input->post("type");
        //kondisi type
        if($type == "add")
        {
          //code insert
        }elseif($type == "edit"){
          //code update
        }else{
          //return false
        }
      }else{
        $data = array (
                  'title'       => 'Add Bookmark &rsaquo; Penandaku.com',
                  'bookmark'    => TRUE
        );
        $sub_data = array (
                      'type'                => 'add',
                      'id_bookmark'         => '',
                      'judul_bookmark'      => '',
                      'label_bookmark'      => '',
                      'url_bookmark'        => '',
                      'descriptions'        => ''
        );
        $this->load->view('part/header', $data);
        $this->load->view('part/sidebar');
        $this->load->view('layout/bookmark/form_bookmark', $sub_data);
        $this->load->view('part/footer');
      }

    }else{
      show_404();
      return FALSE;
    }
  }

}
