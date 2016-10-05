<?php

namespace mhndev\yii2Eav\Models;

use mhndev\yii2Eav\Traits\EntityTrait;

/**
 * Class ActiveRecord
 * @package mhndev\yii2Eav\Models
 */
abstract class ActiveRecord extends \yii\db\ActiveRecord
{
    use EntityTrait;

}
