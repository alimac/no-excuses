<?php
$db_url='mysql://default:default@localhost/default';
$databases=array('default' => array(
    'default' => array(
        'database' => 'default',
        'username' => 'default',
        'password' => 'default',
        'driver' => 'mysql',
        'host' => 'localhost',
    ),
),);
$databases['default']['default'] = array (
  'database' => 'default',
  'username' => 'default',
  'password' => 'default',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'qKW2Q1PQ_FuPaOTxlVpe2cIpMNL1cFv9AymhXVFG_FMrd0h82dpGvLs9T9YBbhucD5vHlK1_mQ';
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/files/config_P4CPsrBTJNdZu3tBquqUU7traJogxVB3D4DltMA7689S5mbuD6A99zq__2zYRK2u3OReN7n8IA/sync';

require_once DRUPAL_ROOT . '/sites/default/vendor/autoload.php';
