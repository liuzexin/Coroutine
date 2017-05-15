<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/5/13
 * Time: 9:39
 * @param server
 */
namespace ga\coroutine\app;
use ga\coroutine\log\Logger;
class CoroutineApp{

    private $server;

    public function __construct()
    {
        $this->server = new Logger();
    }

    public function run(){

        $this->actionLog();
    }

    public function actionTest(){
        $coroutineServer = new Logger();
        foreach($coroutineServer->range(1, 10) as $num){
            echo $num . PHP_EOL;
        }
    }

    public function actionLog(){
        $this->server->fileName = WEB_ROOT_DIR . '/test';
        $log = $this->server->readX();
        var_dump($log->send(2));
        var_dump($log->send(3));
        var_dump($log->send("error"));
    }

    public function error(){

    }
}