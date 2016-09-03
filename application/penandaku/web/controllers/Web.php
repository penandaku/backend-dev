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
      //
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

}
