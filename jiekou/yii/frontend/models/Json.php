<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arrive".
 *
 * @property integer $id
 * @property string $jiaotong
 * @property string $jiezhan
 * @property string $bagintime
 * @property string $endtime
 * @property string $is_pei
 * @property integer $pei_num
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