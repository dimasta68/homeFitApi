<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $cat
 * @property string $title_task
 * @property string $desc_task
 * @property int $lavel
 * @property int $inactive
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat', 'title_task', 'desc_task', 'lavel', 'inactive'], 'required'],
            [['lavel', 'inactive'], 'integer'],
            [['cat', 'title_task', 'desc_task'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat' => 'категория ',
            'title_task' => 'Название задания',
            'desc_task' => 'Описание задания',
            'lavel' => 'Уровень сложности',
            'inactive' => 'Активно ? ',
        ];
    }
}
