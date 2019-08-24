<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tvgcc".
 *
 * @property int $tvgcc_id
 * @property double $WorkOrderNo
 * @property double $CustNo
 * @property string $Name
 * @property string $RegisterDatetime
 * @property string $InstallDatetime
 * @property string $CompleteDatetime
 * @property string $Type
 * @property string $Status
 * @property string $Zipcode
 * @property string $Reason
 * @property string $MainPackage
 * @property string $DepotCode
 * @property string $Company
 * @property string $System
 */
class Tvgcc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tvgcc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['WorkOrderNo', 'CustNo'], 'number'],
            [['RegisterDatetime', 'InstallDatetime', 'CompleteDatetime'], 'safe'],
            [['Name', 'Type', 'Status', 'Zipcode', 'Reason', 'MainPackage', 'DepotCode', 'Company', 'System'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tvgcc_id' => 'Tvgcc ID',
            'WorkOrderNo' => 'Work Order No',
            'CustNo' => 'Cust No',
            'Name' => 'Name',
            'RegisterDatetime' => 'Register Datetime',
            'InstallDatetime' => 'Install Datetime',
            'CompleteDatetime' => 'Complete Datetime',
            'Type' => 'Type',
            'Status' => 'Status',
            'Zipcode' => 'Zipcode',
            'Reason' => 'Reason',
            'MainPackage' => 'Main Package',
            'DepotCode' => 'Depot Code',
            'Company' => 'Company',
            'System' => 'System',
        ];
    }
}
