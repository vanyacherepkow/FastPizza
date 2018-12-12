<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class RegForm extends Model
{
    public $Email;
    public $Password;
    public $Firstname;
    public $LastName;
    public $Tel;
    public $BDay;
    public $Adres;
    public $SecondName;
    public $FlatKey;
    public $Password1;


    public function attributeLabels(){
return[
      'Username'=>'Логин',
      'Password'=>'Пароль',
      'Password1'=>'Повторите пароль',
      'Email' =>'Почта',
      'Password'=>'Пароль',
      'Firstname'=>'Имя',
      'LastName'=>'Фамилия',
      'Tel'=>'Телефон',
      'BDay'=>' День Рождения',
      'Adres' =>'Адрес',
      'SecondName'=>' Отчество',
      'FlatKey'=>'Домофон',

    ];
    }

  }
