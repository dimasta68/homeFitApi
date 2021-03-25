<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answer_interview".
 *
 * @property int $id
 * @property int $user_id
 * @property string $username
 * @property string $answer
 */
class AnswerInterview extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answer_interview';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'answer'], 'required'],
            [['user_id'], 'integer'],
            [['username', 'answer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'username' => 'Имя пользователя',
            'answer' => 'Ответ',
        ];
    }
}
