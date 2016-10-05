<?php

namespace mhndev\yii2Eav\Models;

use mhndev\yii2Eav\Interfaces\iValue;
use yii\db\ActiveRecord;

/**
 * Class Value
 *
 * @property $attribute_id
 * @property $value
 * @property $entity
 * @property $entity_id
 *
 * @package mhndev\yii2Eav\Models
 */
class Value extends ActiveRecord implements iValue
{

    /**
     * @return string
     */
    public static function tableName()
    {
        return 'values';
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributeRelation()
    {
        return $this->hasOne(Attribute::class, ['id' => 'attribute_id']);
    }

    public function getEntityRecord()
    {
        return $this->hasOne($this->entity, ['id' => 'entity_id']);
    }
}
