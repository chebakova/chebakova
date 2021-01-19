<?php

namespace chebakova;

use core\LogAbstract;
use core\LogInterface;
use DateTime;

class MyLog extends LogAbstract implements LogInterface
{

    public function _log(string $str)
    {
        $this->log[] = $str;
    }

    public static function log($str):void
    {
        self::Instance()->_log($str);
    }

    public function _write()
    {
        $d = new DateTime();
        $filename = "log/".$d->format('d.m.Y_T_H.i.s.u').".log";

        $dirname = "log";

        if(!(is_dir($dirname)))
        {
            mkdir($dirname, 0777, true);
        }

        $logfile = "";
        
        foreach($this->log as $value){
            echo $value."\n";
            $logfile .= $value."\r\n";
        }
        
        file_put_contents($filename, $logfile, FILE_APPEND);
    }

    public static function write():void
    {
        self::Instance()->_write();
    }
}



