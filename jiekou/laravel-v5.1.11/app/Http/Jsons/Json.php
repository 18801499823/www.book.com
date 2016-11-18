<?php
namespace App\Http\Jsons;

/**
* 
*/
class Json
{
	public static function json($code,$message,$value)
	{
		$arr = array(
			'code' => $code,
			'message' => $message,
			'data' => $value,
			);
		return json_encode($arr['data']);exit;
		# code...
	}
}
