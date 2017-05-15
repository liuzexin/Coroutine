<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/5/13
 * Time: 9:29
 */
namespace ga\coroutine\log;
class Logger {

    public $fileName;
    public $file;

    public function range($start, $end , $step =1){
        for($i=$start; $i <= $end; $i+=$step){
            yield $i;
        }
    }

    public function __set($name, $value)
    {

        var_dump($name);
        if ($name == 'fileName'){
            $this->file = fopen($value, 'w+');
        }
    }

    public function readX(){

        while(true){
            yield fgets($this->file) . PHP_EOL;
        }
    }

    public function writeX(){
        while(true){
            fwrite($this->file, yield . PHP_EOL);
        }
    }

    public function profile($regx){

    }

    public function __destruct()
    {
        fclose($this->file);
    }
}