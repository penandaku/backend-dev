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
    if($this->member->member_id()){
      //create data array
      $data = array (
                'title'         => 'Penandaku.com - Simple Apps for Save and Access Bookmark online.',
                'descriptions'  => '',
                'keywords'      => ''
      );
      //parse view dengan array data
      $this->load->view('part/header',$data);
      $this->load->view('layout/dashboard');
      $this->load->view('part/footer');
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
