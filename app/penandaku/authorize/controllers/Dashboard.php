<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Dashboard extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      //load model
      $this->load->model('auth');
  }

  public function index()
  {
    if($this->auth->username() && $this->auth->password())
    {
      //
    }else{
      show_404();
      return FALSE;
    }
  }

  public function logout()
  {
    if($this->auth->username() && $this->auth->password())
    {
      $this->auth->logout();
      redirect('/');
    }else{
      show_404();
      return FALSE;
    }
  }
}
