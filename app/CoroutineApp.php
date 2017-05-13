<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/5/13
 * Time: 9:39
 * @param server
 */

class CoroutineApp{

    private $server;

    public function __construct()
    {
        $this->server = new CoroutineServer();
    }

    public function run(){

        $this->actionLog();
    }

    public function actionTest(){
        $coroutineServer = new CoroutineServer();
        foreach($coroutineServer->range(1, 10) as $num){
            echo $num . PHP_EOL;
        }
    }

    public function actionLog(){
        $log = $this->server->write();
        $log->send('123123');
        $log->send('12312asd');
    }
}