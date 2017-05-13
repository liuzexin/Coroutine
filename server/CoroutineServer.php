<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/5/13
 * Time: 9:29
 */

class CoroutineServer {

    public function range($start, $end , $step =1){
        for($i=$start; $i <= $end; $i+=$step){
            yield $i;
        }
    }

    public function read(){
        $file = fopen(WEB_ROOT_DIR.'/test', 'r');
        while(true){
            echo fread($file, 10) . PHP_EOL;
            yield;
        }
    }

    public function write(){
        $file = fopen(WEB_ROOT_DIR.'/test', 'w');
        var_dump($file);
        while(true){
            fwrite($file, yield . PHP_EOL);
        }
    }
}