<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Web extends CI_Controller {

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
    //check dengan form validation
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
    //set message
    $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:ubuntu">
                                                        <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                     </div>');
    $this->form_validation->set_message('min_length', '<div class="alert alert-danger" style="font-family:ubuntu">
                                                        <i class="fa fa-exclamation-circle"></i> {field} tidak boleh kurang dari {param} karakter.
                                                       </div>');
    $this->form_validation->set_message('valid_email', '<div class="alert alert-danger" style="font-family:ubuntu">
                                                         <i class="fa fa-exclamation-circle"></i> Alamat {field} tidak valid.
                                                        </div>');
    //status
    if($this->form_validation->run() == TRUE)
    {
      //checking username, apakah sudah terdaftar ?
      $checking_username = $this->member->checking_data('tbl_member', array('username' => $this->input->post('username', TRUE)));
      //checking email, apakah sudah terdaftar ?
      $checking_email    = $this->member->checking_data('tbl_member', array('email' => $this->input->post('email', TRUE)));
      if($checking_username != FALSE){
        //set data error array
        $data = array (
                  'error' => '<div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"></i> username yang anda masukan sudah terdaftar.
                              </div>'
        );
        $this->load->view('part/header',$data);
        $this->load->view('layout/home');
        $this->load->view('part/footer');

      }elseif($checking_email != FALSE){
        //set data error array
        $data = array (
                  'error' => '<div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"></i> email address yang anda masukan sudah terdaftar.
                              </div>'
        );
        $this->load->view('part/header',$data);
        $this->load->view('layout/home');
        $this->load->view('part/footer');
      }else{
        //var insert array
        $insert = array(
                    'nama'        => '',
                    'username'    => '',
                    'password'    => '',
                    'email'       => ''
        );
        $this->member->insert('tbl_member', $insert);
        //code send email here !
      }
    }else{
      //create data array
      $data = array (
                'title'         => 'Penandaku.com - Simple Apps for Save and Access Bookmark online.',
                'descriptions'  => '',
                'keywords'      => ''
      );
      //parse view dengan array data
      $this->load->view('part/header',$data);
      $this->load->view('layout/home');
      $this->load->view('part/footer');
    }
  }

  public function about()
  {
    //create data array
    $data = array (
              'title'         => 'About - Penandaku.com',
              'descriptions'  => '',
              'keywords'      => ''
    );
    //parse view dengan array data
    $this->load->view('part/header',$data);
    $this->load->view('layout/about');
    $this->load->view('part/footer');
  }
}
