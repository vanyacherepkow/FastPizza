<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pizza".
 *
 * @property int $id_blud
 * @property string $Naim_blud
 * @property int $price_blud
 * @property string $razm_blud
 * @property string $image_blud
 * @property string $ing_blud
 * @property string $type_blud
 */
class Pizza_Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pizza';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Naim_blud', 'price_blud', 'razm_blud', 'image_blud', 'ing_blud', 'type_blud'], 'required'],
            [['price_blud'], 'integer'],
            [['Naim_blud', 'razm_blud', 'image_blud', 'ing_blud', 'type_blud'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_blud' => 'Id Blud',
            'Naim_blud' => 'Naim Blud',
            'price_blud' => 'Price Blud',
            'razm_blud' => 'Razm Blud',
            'image_blud' => 'Image Blud',
            'ing_blud' => 'Ing Blud',
            'type_blud' => 'Type Blud',
        ];
    }

    /**
     * @inheritdoc
     * @return PizzaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PizzaQuery(get_called_class());
    }
}
