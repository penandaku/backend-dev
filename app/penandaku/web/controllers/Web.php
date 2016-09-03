<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         httpa://penandaku.com
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

  public function login()
  {
    //jika memang session sudah terdaftar, alihkan ke dashboard
    if($this->member->username() && $this->member->password())
    {
      //alihkan dashboard
      redirect('member/dashboard');

    }else{
      //check dengan form validation
      $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[4]|max_length[25]|alpha_dash');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[5]|max_length[40]');
        //check status form validation
        if($this->form_validation->run() == TRUE){
          //get form data
          $username = $this->input->post('', TRUE);
          $password = SHA1(MD5(MD5(SHA1($this->input->post('password', TRUE)))));
          //checking data via model
          $checking = $this->member->login('tbl_member', array('username' => $username), array('password' => $password));
          //status
          if($checking != FALSE){
            //loop data
            foreach($checking as $member){
              //check aktivasi email
              if($member->verifikasi_email === 0){
                $this->load->view('layout/auth/verifikasi_email');
              }else{
                $this->session->set_userdata(array(
                    'member_id' => $member->id_memer,
                    'username'  => $member->username,
                    'password'  => $member->password,
                    'nama'      => $member->nama
                ));
                redirect('member/dashboard');
              }
            }
          }else{
            //create data array
            $data = array(
                      'error' => '<div class="alert alert-danger">
                                    <strong>FAILED!</strong> Username atau Password Anda salah..
                                  </div>'
            );
            $this->load->view('layout/auth/login', $data);
          }
        }else{
          //create data array
          $data = array (
                    'title'         => 'Masuk - Penandaku.com',
                    'descriptions'  => '',
                    'keywords'      => ''
          );
          $this->load->view('layout/auth/login', $data);
        }
    }
  }

}
