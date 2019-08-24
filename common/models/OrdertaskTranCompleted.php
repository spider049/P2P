<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ordertask_tran_completed".
 *
 * @property int $Ordertask_Tran_Completed_ID Key
 * @property string $Technician_ID เชื่อมกับตาราง ผูู้รับเหมา รับงาน
 * @property string $AppointmentDate วันที่ติดตั้ง/บริการ
 * @property string $AppointmentTimeslot ช่วงเวลาติดตั้ง/บริการ เช้า-บ่าย
 * @property string $ServiceAccessNo เลขสมาชิก
 * @property string $CustomerName ชื่อลูกค้า
 * @property string $Handler โค๊ดช่างรับงาน
 * @property string $ProductName ชื่องานที่ติดตั้ง/บริการ
 * @property string $Address ที่อยู่ติดตั้ง
 * @property string $InstallFlag
 * @property string $Area
 * @property string $OperationStatus สถานะออเดอร์
 * @property string $Event
 * @property string $Remark
 * @property string $SN_Device S/N อุปกรณ์ที่ติดตั้ง
 * @property string $FiberWireLength_zum สายไฟเบอร์รวม
 * @property string $CATV_WireLength_zum สายทีวีรวม
 * @property string $Price_fiber_this_Length ราคาค่าติดตั้งตามระยะ เฉพาะ TrueOnline
 * @property string $comment_frm_admin ผู้บันทึกอธิบายเพิ่มเติม
 */
class OrdertaskTranCompleted extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ordertask_tran_completed';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Technician_ID', 'AppointmentDate', 'AppointmentTimeslot', 'ServiceAccessNo', 'CustomerName', 'Handler', 'ProductName', 'Address', 'InstallFlag', 'Area', 'OperationStatus', 'Event', 'Remark', 'SN_Device', 'FiberWireLength_zum', 'CATV_WireLength_zum', 'Price_fiber_this_Length', 'comment_frm_admin'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Ordertask_Tran_Completed_ID' => 'Key',
            'Technician_ID' => 'เชื่อมกับตาราง ผูู้รับเหมา รับงาน',
            'AppointmentDate' => 'วันที่ติดตั้ง/บริการ',
            'AppointmentTimeslot' => 'ช่วงเวลาติดตั้ง/บริการ เช้า-บ่าย',
            'ServiceAccessNo' => 'เลขสมาชิก',
            'CustomerName' => 'ชื่อลูกค้า',
            'Handler' => 'โค๊ดช่างรับงาน',
            'ProductName' => 'ชื่องานที่ติดตั้ง/บริการ',
            'Address' => 'ที่อยู่ติดตั้ง',
            'InstallFlag' => 'Install Flag',
            'Area' => 'Area',
            'OperationStatus' => 'สถานะออเดอร์',
            'Event' => 'Event',
            'Remark' => 'Remark',
            'SN_Device' => 'S/N อุปกรณ์ที่ติดตั้ง',
            'FiberWireLength_zum' => 'สายไฟเบอร์รวม',
            'CATV_WireLength_zum' => 'สายทีวีรวม',
            'Price_fiber_this_Length' => 'ราคาค่าติดตั้งตามระยะ เฉพาะ TrueOnline',
            'comment_frm_admin' => 'ผู้บันทึกอธิบายเพิ่มเติม',
        ];
    }
}
