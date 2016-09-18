<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Join extends CI_Controller {

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
      redirect('/');
    }else{
      //check dengan form validation
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('g-recaptcha-response', '<b>Captcha</b>', 'callback_getResponseCaptcha');
      //set message
      $this->form_validation->set_message('required',     '<div class="alert alert-danger" style="font-family:Roboto">
                                                            <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                          </div>');
      $this->form_validation->set_message('min_length',   '<div class="alert alert-danger" style="font-family:Roboto">
                                                            <i class="fa fa-exclamation-circle"></i> {field} tidak boleh kurang dari {param} karakter.
                                                           </div>');
      $this->form_validation->set_message('valid_email', '<div class="alert alert-danger" style="font-family:Roboto">
                                                           <i class="fa fa-exclamation-circle"></i> Alamat {field} tidak valid.
                                                          </div>');
      $this->form_validation->set_message('callback_getResponseCaptcha',
                                                          '<div class="alert alert-danger" style="font-family:Roboto">
                                                            <i class="fa fa-exclamation-circle"></i> {field} {g-recaptcha-response} harus diisi.
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
                                </div>',
                    'title'         => 'Join - Penandaku.com',
                    'descriptions'  => '',
                    'keywords'      => '',
                    'recaptcha_html' => $this->recaptcha->render()                                 
          );
          $this->load->view('part/header',$data);
          $this->load->view('layout/auth/join');
          $this->load->view('part/footer');

        }elseif($checking_email != FALSE){
          //set data error array
          $data = array (
                    'error' => '<div class="alert alert-danger">
                                   <i class="fa fa-exclamation-circle"></i> email address yang anda masukan sudah terdaftar.
                                </div>',
                    'title'         => 'Join - Penandaku.com',
                    'descriptions'  => '',
                    'keywords'      => '',
                    'recaptcha_html' => $this->recaptcha->render()
          );
          $this->load->view('part/header',$data);
          $this->load->view('layout/auth/join');
          $this->load->view('part/footer');
        }else{
          //var insert array
          $insert = array(
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
                  'title'         => 'Join - Penandaku.com',
                  'descriptions'  => '',
                  'keywords'      => '',
                  'recaptcha_html' => $this->recaptcha->render()
        );
        $this->load->view('part/header',$data);
        $this->load->view('layout/auth/join');
        $this->load->view('part/footer');
      }
    }
  }

  public function getResponseCaptcha($str)
  {
      $this->load->library('recaptcha');
      $response = $this->recaptcha->verifyResponse($str);
      if ($response['success'])
      {
          return true;
      }
      else
      {
          $this->form_validation->set_message('getResponseCaptcha', ' <div class="alert alert-danger" style="font-family:Roboto">
                                                                          <i class="fa fa-exclamation-circle"></i> %s harus diisi.
                                                                      </div>' );
          return false;
      }
  }

}
