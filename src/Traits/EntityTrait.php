<?php

namespace mhndev\yii2Eav\Traits;
use mhndev\yii2Eav\Models\Attribute;
use mhndev\yii2Eav\Models\Value;

/**
 * Class EntityTrait
 * @package mhndev\yii2Eav\Traits
 */
trait EntityTrait
{


    /**
     * @var array
     */
    protected static $config;

    /**
     * @return mixed
     */
    abstract function attributes();


    /**
     *
     */
    public function init()
    {
        parent::init();

        self::$config = include \Yii::getAlias('@app/config/').DIRECTORY_SEPARATOR.'eav.php';
    }


    /**
     * @inheritdoc
     */
    public function loadDefaultValues($skipIfSet = true)
    {

    }


    /**
     * @inheritdoc
     */
    public static function findBySql($sql, $params = [])
    {

    }

    /**
     * @inheritdoc
     */
    protected static function findByCondition($condition)
    {

    }

    /**
     * @inheritdoc
     */
    public static function updateAll($attributes, $condition = '', $params = [])
    {

    }

    /**
     * @inheritdoc
     */
    public static function updateAllCounters($counters, $condition = '', $params = [])
    {

    }

    /**
     * @inheritdoc
     */
    public static function deleteAll($condition = '', $params = [])
    {

    }

    /**
     * @inheritdoc
     */
    public static function find()
    {

    }


    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {

    }

    /**
     * @inheritdoc
     */
    public function transactions()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public static function populateRecord($record, $row)
    {

    }


    /**
     * @inheritdoc
     */
    protected function insertInternal($attributes = null)
    {
        $result = parent::insertInternal($this->attributes());

        if(! $result){
            return $result;

        }

        else{
            $dynamicAttributes = array_diff($attributes, $this->attributes());

            if ( self::$config['detect_category']['type'] == 'entity_column' ){

                $column_name = self::$config['detect_category']['entity_column'];

                $column_value = $attributes[$column_name];

                if($attribute = Attribute::findOne(['category'=>$column_value])){

                    foreach ($dynamicAttributes as $attr){
                        $value = new Value([
                            'attribute_id' => $attribute->id,
                            'entity' => static::class,
                            'entity_id' => '',
                            'value' => ''
                        ]);
                    }

                }
                else{

                }


            } elseif (self::$config['detect_category']['type'] == 'relation' ) {

            } else {

            }

        }


    }

    /**
     * @inheritdoc
     */
    public function update($runValidation = true, $attributeNames = null)
    {

    }

    /**
     * @inheritdoc
     */
    public function delete()
    {

    }

    /**
     * @inheritdoc
     */
    protected function deleteInternal()
    {

    }

    /**
     * @inheritdoc
     */
    public function equals($record)
    {

    }




    function getAttributes()
    {

    }

    function getDynamicAttributes()
    {

    }

}
