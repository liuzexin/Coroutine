<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/5/13
 * Time: 8:58
 */
define("WEB_ROOT_DIR", dirname(__FILE__));

require_once WEB_ROOT_DIR."/server/CoroutineServer.php";
require_once WEB_ROOT_DIR . "/app/CoroutineApp.php";

(new CoroutineApp())->run();