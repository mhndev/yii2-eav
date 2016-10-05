<?php

namespace mhndev\yii2Eav\Models;

use yii\db\ActiveRecord;
use mhndev\yii2Eav\Interfaces\iAttribute;

/**
 * Class Attribute
 * @property $name
 * @property $type
 * @property $category
 * @package mhndev\yii2Eav\Models
 */
class Attribute extends ActiveRecord implements iAttribute
{

    /**
     * @return string
     */
    public static function tableName()
    {
        return 'attributes';
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPossibleValues()
    {
        return $this->hasMany(PossibleValue::class, ['attribute_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValues()
    {
        return $this->hasMany(Value::class, ['attribute_id' => 'id']);
    }

}
