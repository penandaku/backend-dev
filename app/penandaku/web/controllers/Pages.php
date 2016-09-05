<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Pages extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      //load library
      $this->load->library('form_validation');
      //load model
      $this->load->model('member');
  }

  public function feedback()
  {
    //create data array
    $data = array (
              'title'         => 'Feedback - Penandaku.com',
              'descriptions'  => '',
              'keywords'      => ''
    );
    //parse view dengan array data
    $this->load->view('part/header',$data);
    $this->load->view('layout/pages/feedback');
    $this->load->view('part/footer');
  }
  public function bug()
  {
    //create data array
    $data = array (
              'title'         => 'Report Bug - Penandaku.com',
              'descriptions'  => '',
              'keywords'      => ''
    );
    //parse view dengan array data
    $this->load->view('part/header',$data);
    $this->load->view('layout/pages/bug');
    $this->load->view('part/footer');
  }
  public function terms()
  {
    //create data array
    $data = array (
              'title'         => 'Terms of Us - Penandaku.com',
              'descriptions'  => '',
              'keywords'      => ''
    );
    //parse view dengan array data
    $this->load->view('part/header',$data);
    $this->load->view('layout/pages/terms');
    $this->load->view('part/footer');
  }
  public function policies()
  {
    //create data array
    $data = array (
              'title'         => 'Privacy Policy - Penandaku.com',
              'descriptions'  => '',
              'keywords'      => ''
    );
    //parse view dengan array data
    $this->load->view('part/header',$data);
    $this->load->view('layout/pages/policies');
    $this->load->view('part/footer');
  }
}
