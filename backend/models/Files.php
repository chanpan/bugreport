<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property string $file_name
 * @property int $re_id
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['file_name', 're_id'], 'required'],
            [['re_id','msg_id','forder'], 'integer'],
            [['file_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'file_name' => Yii::t('app', 'File Name'),
            're_id' => Yii::t('app', 'Re ID'),
        ];
    }
}
