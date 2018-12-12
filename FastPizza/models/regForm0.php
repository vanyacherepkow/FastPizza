<?php

namespace app\models;

use Yii;
use yii\base\Model;

class regForm extends Model
{
  public $log;
  public $regpass;
  public function rules()
  {
      return [
          // username and password are both required
          [['log', 'regpass'], 'required'],
      ];
  }

    public function attributeLabels(){
      return[
        'log'=>'Логин',
        'regpass'=>'Пароль',
      ];
    }

    public static function tableName()
    {
        return 'user';
    }
    public function reg()
    {
      //$user = static::findOne(['username'=>$username]);
      $user = new User();
      $user->username = $this->log;
      $user->password = $this->regpass;
      $user->save();
      unset($user);
    }
}
