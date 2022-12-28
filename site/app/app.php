<?php

# error_reporting(E_ALL);
# error_log(print_r($_SERVER, true));
 
$component = getenv('_COMPONENT');
$function = getenv('_FUNCTION');
$config = getenv('_CONFIG');

require_once strtolower($component) . '.php';

$instance = new $component();
$instance->$function($config);
