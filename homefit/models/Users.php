<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $lastname
 * @property string $avatar
 * @property int $role
 * @property string $promocode
 */
class Users extends \yii\db\ActiveRecord
{
    public $avatar;
    public $img;
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'lastname'], 'required'],
            [['role'], 'integer'],
            [['file'], 'file', 'extensions' => 'png, jpg',
                'skipOnEmpty' => true],
            [[ 'name', 'lastname','avatar_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'lastname' => 'Фамилия',
            'avatar' => 'Аватарка',
        ];
    }
}
