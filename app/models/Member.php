<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Member extends CI_Model
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
  function member_id()
  {
    return $this->session->userdata('member_id');
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

	/* fungsi checking data */
	function checking_data($table,$where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return $query->result();
		}
	}
	/* end fungsi checking data */

	/* fungsi insert join */
	function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}
	/* end fungsi insert join */

	/* fungsi GetAll */
	function GetAll()
	{
			$this->db->select('*');
			$this->db->from('tbl_label');
			$this->db->order_by('id_label', 'DESC');
			$GetAll = $this->db->get();
			//jika data ada (lebih dari 0)
			if($GetAll->num_rows() > 0 )
			{
					foreach ($GetAll->result() as $data){
							$hasil[] = $data;
					}
					return $hasil;
			}
	}
	/* end fungsi GetAll */

	/* fungsi inser label */
	function insert_label($param){
			/*
			* @param : var get controller
			*/
	    $this->db->insert('tbl_label', $param);
	}
	/* end fungsi insert label */

	/* fungsi update label */
	function update_label($param, $id){
			/*
			* @param : var get controller
			*/
	    $this->db->insert('tbl_label', $param, $id);
	}
	/* end fungsi update label */

	/* fungsi logout */
	function logout()
	{
		$this->session->sess_destroy();
	}
	/* end fungsi logout */

	/* fungsi delete account */
	function destroy_account($param)
	{
		/*
		* @param : username
		*/
		$query = $this->db->query("DELETE FROM tbl_member WHERE username ='$param'");
		if($query)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
