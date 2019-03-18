<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "help_reports".
 *
 * @property int $id รหัส
 * @property string $title หัวข้อ
 * @property string $detail รายละเอียด
 * @property int $rstat
 * @property string $date_start วันที่เริ่ม
 * @property int $forder
 */
class HelpReports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'help_reports';
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
            [['date_start'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'title' => 'หัวข้อ',
            'detail' => 'รายละเอียด',
            'rstat' => 'Rstat',
            'date_start' => 'วันที่เริ่ม',
            'forder' => 'Forder',
        ];
    }
}
