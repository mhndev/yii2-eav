<?php

namespace mhndev\yii2Eav\Traits;

/**
 * Class EntityTrait
 * @package mhndev\yii2Eav\Traits
 */
trait EntityTrait
{

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
    public function attributes()
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
    public function insert($runValidation = true, $attributes = null)
    {

    }

    /**
     * @inheritdoc
     */
    protected function insertInternal($attributes = null)
    {

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

    /**
     * @inheritdoc
     */
    public function isTransactional($operation)
    {

    }




    function getAttributes()
    {

    }

    function getDynamicAttributes()
    {

    }

}
