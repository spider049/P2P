<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task_mornitor".
 *
 * @property int $task_mornitor_id คีย์หลัก
 * @property string $CustomerOrderNo
 * @property string $WorkOrderNo
 * @property string $ServiceAccessNo หมายเลขสมาชิก
 * @property string $AccessNumber
 * @property string $ProductName
 * @property string $InstallFlag
 * @property string $Area
 * @property string $OperationStatus
 * @property string $Address ที่อยู่ติดตั้ง
 * @property string $CustomerName ชื่อลูกค้า
 * @property string $ContactName
 * @property string $CustomerContactPhone
 * @property string $AppointmentDate
 * @property string $AppointmentTimeslot
 * @property string $SubmittedDate
 * @property string $Subcontractor
 * @property string $Team
 * @property string $Handler ช่าง
 * @property string $RejectReasonTH
 * @property string $RejectReason
 * @property string $ReturnReasonTH
 * @property string $ReturnReason
 * @property string $ConfirmedCompleteTime
 * @property string $ConfirmedBeginTime
 * @property string $Latitude
 * @property string $Longitude
 * @property string $WOCreateTime
 * @property string $TimeoutDate
 * @property string $CustomerContactPhone2
 * @property string $AccessMode
 * @property string $Event
 * @property string $InstallationTypefortechnician
 * @property string $Remark
 * @property string $BlackWireLength
 * @property string $WhiteWireLength
 * @property string $AcceptRemark
 * @property string $Province
 * @property string $District
 * @property string $EntryFee
 * @property string $SubDistrict
 * @property string $ZoneArea
 * @property int $dropwire_mark_id
 */
class TaskMornitor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_mornitor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['AppointmentDate'], 'safe'],
            [['dropwire_mark_id'], 'integer'],
            [['CustomerOrderNo', 'WorkOrderNo', 'ServiceAccessNo', 'AccessNumber', 'ProductName', 'InstallFlag', 'Area', 'OperationStatus', 'Address', 'CustomerName', 'ContactName', 'CustomerContactPhone', 'AppointmentTimeslot', 'SubmittedDate', 'Subcontractor', 'Team', 'Handler', 'RejectReasonTH', 'RejectReason', 'ReturnReasonTH', 'ReturnReason', 'ConfirmedCompleteTime', 'ConfirmedBeginTime', 'Latitude', 'Longitude', 'WOCreateTime', 'TimeoutDate', 'CustomerContactPhone2', 'AccessMode', 'Event', 'InstallationTypefortechnician', 'Remark', 'BlackWireLength', 'WhiteWireLength', 'AcceptRemark', 'Province', 'District', 'EntryFee', 'SubDistrict', 'ZoneArea'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'task_mornitor_id' => 'คีย์หลัก',
            'CustomerOrderNo' => 'Customer Order No',
            'WorkOrderNo' => 'Work Order No',
            'ServiceAccessNo' => 'หมายเลขสมาชิก',
            'AccessNumber' => 'Access Number',
            'ProductName' => 'Product Name',
            'InstallFlag' => 'Install Flag',
            'Area' => 'Area',
            'OperationStatus' => 'Operation Status',
            'Address' => 'ที่อยู่ติดตั้ง',
            'CustomerName' => 'ชื่อลูกค้า',
            'ContactName' => 'Contact Name',
            'CustomerContactPhone' => 'Customer Contact Phone',
            'AppointmentDate' => 'Appointment Date',
            'AppointmentTimeslot' => 'Appointment Timeslot',
            'SubmittedDate' => 'Submitted Date',
            'Subcontractor' => 'Subcontractor',
            'Team' => 'Team',
            'Handler' => 'ช่าง',
            'RejectReasonTH' => 'Reject Reason Th',
            'RejectReason' => 'Reject Reason',
            'ReturnReasonTH' => 'Return Reason Th',
            'ReturnReason' => 'Return Reason',
            'ConfirmedCompleteTime' => 'Confirmed Complete Time',
            'ConfirmedBeginTime' => 'Confirmed Begin Time',
            'Latitude' => 'Latitude',
            'Longitude' => 'Longitude',
            'WOCreateTime' => 'Wo Create Time',
            'TimeoutDate' => 'Timeout Date',
            'CustomerContactPhone2' => 'Customer Contact Phone2',
            'AccessMode' => 'Access Mode',
            'Event' => 'Event',
            'InstallationTypefortechnician' => 'Installation Typefortechnician',
            'Remark' => 'Remark',
            'BlackWireLength' => 'Black Wire Length',
            'WhiteWireLength' => 'White Wire Length',
            'AcceptRemark' => 'Accept Remark',
            'Province' => 'Province',
            'District' => 'District',
            'EntryFee' => 'Entry Fee',
            'SubDistrict' => 'Sub District',
            'ZoneArea' => 'Zone Area',
            'dropwire_mark_id' => 'Dropwire Mark ID',
        ];
    }
}
