<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property int $id
 * @property string $topic
 * @property string $detail
 * @property string $name
 * @property string $email
 * @property string $created
 * @property int $view
 * @property int $reply
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'view', 'reply'], 'integer'],
            [['detail'], 'string'],
            [['created'], 'safe'],
            [['topic'], 'string', 'max' => 255],
            [['name', 'email'], 'string', 'max' => 70],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'topic' => Yii::t('app', 'Topic'),
            'detail' => Yii::t('app', 'Detail'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'created' => Yii::t('app', 'Created'),
            'view' => Yii::t('app', 'View'),
            'reply' => Yii::t('app', 'Reply'),
        ];
    }
}
