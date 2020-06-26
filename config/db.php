<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=technosummit',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'on afterOpen' => function($event) {
        // set 'Asia/Bangkok' timezone
        $event->sender->createCommand("SET time_zone='+05:30';")->execute();
    },
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
