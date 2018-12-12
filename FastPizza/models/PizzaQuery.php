<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pizza]].
 *
 * @see Pizza
 */
class PizzaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Pizza[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pizza|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
