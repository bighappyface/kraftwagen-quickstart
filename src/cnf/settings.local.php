<?php

$databases = array (
  'default' => array (
    'default' => array (
      'database' => $_ENV['OPENSHIFT_APP_NAME'],
      'username' => $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
      'password' => $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
      'host'     => $_ENV['OPENSHIFT_MYSQL_DB_HOST'],
      'port'     => $_ENV['OPENSHIFT_MYSQL_DB_PORT'],
      'driver'   => 'mysql',
      'prefix'   => '',
    ),
  ),
);

$drupal_hash_salt = $_ENV['OPENSHIFT_SECRET_TOKEN'];
