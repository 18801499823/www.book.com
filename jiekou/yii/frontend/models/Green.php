<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "green".
 *
 * @property integer $id
 * @property string $username
 * @property string $nation
 * @property integer $phone
 * @property string $birth
 * @property string $idNumber
 * @property integer $telephone
 * @property string $isHouse
 * @property string $politicalLandscape
 * @property string $whereUrl
 * @property string $detailedURL
 * @property string $housePeople
 * @property string $filiation
 * @property string $workUnit
 * @property string $annuallIncome
 * @property string $housePeople2
 * @property string $filiation2
 * @property string $workUnit2
 * @property string $annuallIncome2
 * @property string $housePeople3
 * @property string $filiation3
 * @property string $applyType
 * @property string $workUnit3
 * @property string $annuallIncome3
 * @property string $speakContent
 */
class Green extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'green';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'telephone'], 'integer'],
            [['applyType'], 'string'],
            [['username'], 'string', 'max' => 32],
            [['nation'], 'string', 'max' => 11],
            [['birth', 'idNumber', 'isHouse', 'housePeople3', 'filiation3', 'annuallIncome3', 'speakContent'], 'string', 'max' => 255],
            [['politicalLandscape', 'whereUrl', 'detailedURL', 'housePeople', 'filiation', 'workUnit', 'annuallIncome', 'housePeople2', 'filiation2', 'workUnit2', 'annuallIncome2'], 'string', 'max' => 50],
            [['workUnit3'], 'string', 'max' => 33]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'nation' => 'Nation',
            'phone' => 'Phone',
            'birth' => 'Birth',
            'idNumber' => 'Id Number',
            'telephone' => 'Telephone',
            'isHouse' => 'Is House',
            'politicalLandscape' => 'Political Landscape',
            'whereUrl' => 'Where Url',
            'detailedURL' => 'Detailed Url',
            'housePeople' => 'House People',
            'filiation' => 'Filiation',
            'workUnit' => 'Work Unit',
            'annuallIncome' => 'Annuall Income',
            'housePeople2' => 'House People2',
            'filiation2' => 'Filiation2',
            'workUnit2' => 'Work Unit2',
            'annuallIncome2' => 'Annuall Income2',
            'housePeople3' => 'House People3',
            'filiation3' => 'Filiation3',
            'applyType' => 'Apply Type',
            'workUnit3' => 'Work Unit3',
            'annuallIncome3' => 'Annuall Income3',
            'speakContent' => 'Speak Content',
        ];
    }
}
