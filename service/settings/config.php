<?php
/* Configurações de diretório da aplicação e banco de dados */

require_once 'php-activerecord/ActiveRecord.php';

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory('model');
$cfg->set_connections(array('development' => 'mysql://127.0.0.1:3306/database'));
?>