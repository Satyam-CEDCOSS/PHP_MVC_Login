<?php
require_once "../Library/php-activerecord/ActiveRecord.php";
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('../Models');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/mydb'));
});

?>