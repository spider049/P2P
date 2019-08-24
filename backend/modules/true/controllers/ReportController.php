<?php

namespace backend\modules\true\controllers;

use yii;
//use common\models\OrdertaskTranCompleted;
//use backend\modules\true\models\OrdertaskSearch;
//use yii\web\Controller;
//use yii\web\NotFoundHttpException;
//use yii\filters\VerbFilter;



class ReportController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionImport() {      
        return $this->render('import');
    }
    
    public function actionGoogle() {       
        return $this->redirect('https://www.google.co.th');
    }

    public function actionReport1() {
        $sql = "SELECT task_mornitor.ServiceAccessNo,task_mornitor.CustomerName,"
                . "task_mornitor.AppointmentDate,task_mornitor.OperationStatus FROM task_mornitor";

        //$rawData = \yii::$app->db->createCommand($sql)->queryAll();
        //print_r($rawData);
        //print_r($sql);
        try {
            $rawData = \yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                // จำนวนข้อมูลที่ต้องการแสดง
                'pagesize' => 10
            ]
        ]);
        return $this->render('report1', [
                    'dataProvider' => $dataProvider
        ]);
    }

    //////////////////////////////////
    public function actionRp1() {
        $TableNameRp1 = 'ordertask_tran_completed';
        $sql = "SELECT STR_TO_DATE(ordertask_tran_completed.AppointmentDate,'%Y-%m-%d') AS 'งานติดตั้งทรูออนไลน์-ทรูวิชชั่น-วันนี้',
	ordertask_tran_completed.ServiceAccessNo,
	ordertask_tran_completed.CustomerName,ordertask_tran_completed.InstallFlag,
	ordertask_tran_completed.OperationStatus,
	ordertask_tran_completed.`Event`			 
        FROM `p2p`.`ordertask_tran_completed` 
        WHERE `AppointmentDate` = CURDATE()";
        // SearchModel เพิ่มเติม
        //$searchModel = new OrdertaskSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        //$rawData = \yii::$app->db->createCommand($sql)->queryAll();
        //print_r($rawData);
        //print_r($sql);
        try {
            $rawData = \yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                // จำนวนข้อมูลที่ต้องการแสดง
                'pagesize' => 10
            ]
        ]);
        return $this->render('rp1', [
                //'searchModel' => $searchModel,   // ส่งค่าตัวแปรการค้นหาไปด้วย
                'dataProvider' => $dataProvider, 
                'ordertask_tran_completed' => $TableNameRp1,
        ]);
    }

}

