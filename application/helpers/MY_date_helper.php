<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
 * Lay ngay tu dang int
 * @$time : int - thoi gian muon hien thi ngay
 * @$full_time : cho biet co lay ca gio phut giay hay khong
 */
function get_date($time)
{
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	
       $date = unix_to_human($time);
    return $date;
}