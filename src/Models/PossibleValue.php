<?php

namespace mhndev\yii2Eav\Models;

use mhndev\yii2Eav\Interfaces\iPossibleValue;
use yii\db\ActiveRecord;

/**
 * Class PossibleValue
 *
 * @property $attribute_id
 * @property $value
 *
 * @package mhndev\yii2Eav\Models
 */
class PossibleValue extends ActiveRecord implements iPossibleValue
{

    /**
     * @return string
     */
    public static function tableName()
    {
        return 'possible_values';
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributeRelation()
    {
        return $this->hasOne(Attribute::class, ['id' => 'attribute_id']);
    }
}
