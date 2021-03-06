<?php
/**
 * $APP_NAME 统一入口
 */

require_once dirname(__FILE__) . '/init.php';

// 装载你的接口
DI()->loader->addDirs('Sky');

// 云存储
DI()->ucloud = new UCloud_Lite();

/** ---------------- 响应接口请求 ---------------- **/

$api = new PhalApi();
$rs = $api->response();
$rs->output();

