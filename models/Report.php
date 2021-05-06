<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $id
 * @property string $user_name
 * @property string $data
 * @property string $status
 * @property string $question
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name', 'data', 'status', 'question'], 'required'],
            [['user_name', 'data', 'status', 'question'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'Имя пользователья',
            'data' => 'Время отчета ',
            'status' => 'Выполненно/всего',
            'question' => 'Ответ на ворос ',
        ];
    }
}
