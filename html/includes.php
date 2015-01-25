<?php
define('DS', DIRECTORY_SEPARATOR);
define('HTML', dirname(__FILE__) . DS);
define('OPERATIONS', dirname(HTML) . DS . 'operations'. DS);
define('GAUSS', dirname(HTML) . DS . 'gauss' . DS);
define('ACTIONS', dirname(HTML) . DS . 'actions' . DS);
//define('SRC', HTML . 'src'. DS);
//define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));
define('HOSTNAME', 'http://'.$_SERVER['HTTP_HOST']. DS);
define('SRC', HOSTNAME . 'html/src'. DS);

require_once HTML . 'parssing_url.php'; 
require_once HTML . 'errors.php';
$request =  new parssing_url(HOSTNAME);
$error = new Error($request);
?>