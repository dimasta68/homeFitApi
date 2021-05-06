<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "interview".
 *
 * @property int $id
 * @property string $title_interview
 * @property string $answer
 */
class Interview extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'interview';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_interview', 'answer'], 'required'],
            [['title_interview', 'answer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_interview' => 'Текст Вопроса',
            'answer' => 'тип ответа',
        ];
    }
}
