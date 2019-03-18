<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bug_report".
 *
 * @property int $id รหัส
 * @property string $title หัวข้อ
 * @property string $detail รายละเอียด
 * @property int $rstat
 * @property string $date_start วันที่เริ่ม
 * @property int $forder
 */
class BugReport extends \yii\db\ActiveRecord
{
    public $file; //เอาไว้เก็บไฟล์
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bug_report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id', 'title', 'detail', 'rstat', 'date_start', 'forder'], 'required'],
            [['id', 'rstat', 'forder'], 'integer'],
            [['detail'], 'string'],
            [['date_start','name','email'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['file'],'file','maxFiles'=>100] //อัปโหลดได้ไม่เกิน 10 file
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'รหัส'),
            'title' => Yii::t('app', 'หัวข้อ'),
            'detail' => Yii::t('app', 'รายละเอียด'),
            'rstat' => Yii::t('app', 'Rstat'),
            'date_start' => Yii::t('app', 'วันที่เริ่ม'),
            'forder' => Yii::t('app', 'Forder'),
            'name' => yii::t('app','ชื่อ'),
            'email' => yii::t('app','E-mail'),
            'file'=>yii::t('app','ไฟล์อัปโหลด'),
        ];
    }
}
