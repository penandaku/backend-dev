<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         httpa://penandaku.com
*/

 //function CDN - Content Delivery Network
 if(!function_exists('cdn'))
 {
 	function cdn($str = NULL)
 	{
 		return get_instance()->config->item('cdn') . $str;
 	}
 }

 //function CLOUD - Server Management storage
 if(!function_exists('cloud'))
 {
 	function cloud($str = NULL)
 	{
 		return get_instance()->config->item('cloud') . $str;
 	}
 }
