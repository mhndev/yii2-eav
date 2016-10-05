<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'eav',
    'basePath' => dirname(__DIR__),
    'params' => $params,

    'detect_category' => [
        'type' => 'entity_column',
        'entity_column' => 'type',

    ],

/*    'detect_category' => [
      'type' => 'relation',
      'relation_table' => 'category',
      'relation_id' => 'id',

    ]*/


];




return $config;
