<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Auth extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	/* fungsi login auth */
	function login($table,$field1,$field2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field1);
		$this->db->where($field2);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return $query->result();
		}
	}
	/* end fungsi login auth */

	/* fungsi restrict halaman */
  function user_id()
  {
    return $this->session->userdata('user_id');
  }

  function username()
  {
    return $this->session->userdata('username');
  }

  function password()
  {
    return $this->session->userdata('password');
  }
	/* end fungsi restrict */

	/* fungsi logout */
	function logout()
	{
		$this->session->sess_destroy();
	}
	/* end fungsi logout */
}
