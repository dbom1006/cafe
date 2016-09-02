<?php
 
// Đường dẫn tới hệ  thống
define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/admin');
 
// Lấy thông số cấu hình
require (PATH_SYSTEM . '/config.php');
 
require_once PATH_SYSTEM . '/core/Loader.php';
 
// Chạy controller
$loader = new Loader();
$loader->load();

?>