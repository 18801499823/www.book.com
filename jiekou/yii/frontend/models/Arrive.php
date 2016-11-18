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
class Arrive extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'arrive';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pei_num'], 'integer'],
            [['jiaotong'], 'string', 'max' => 50],
            [['jiezhan', 'bagintime', 'endtime'], 'string', 'max' => 30],
            [['is_pei'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jiaotong' => 'Jiaotong',
            'jiezhan' => 'Jiezhan',
            'bagintime' => 'Bagintime',
            'endtime' => 'Endtime',
            'is_pei' => 'Is Pei',
            'pei_num' => 'Pei Num',
        ];
    }
}
