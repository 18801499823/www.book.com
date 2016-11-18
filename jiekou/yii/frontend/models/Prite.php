<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prite".
 *
 * @property integer $pid
 * @property string $pname
 * @property string $ptype
 * @property string $price
 */
class Prite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['pname', 'ptype'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'pname' => 'Pname',
            'ptype' => 'Ptype',
            'price' => 'Price',
        ];
    }
}
