<?php
/**
 * Created by PhpStorm.
 * User: di
 * Date: 27.10.2020
 * Time: 15:44
 */

namespace app\models;
use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
        [['username','password'],'required'],

        ];
    }
    public function attributeLabels()
    {
        return [
            'username'=>'Логин',
            'password'=>'Пароль'
        ];
    }
}