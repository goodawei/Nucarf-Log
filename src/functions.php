<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

if (! function_exists('warning')) {

    function warning($message = '', array $headers = [])
    {
        // create a log channel
        $log = new Logger($message);
        $log->pushHandler(new StreamHandler(storage_path('logs/lumendd.log'), Logger::WARNING));

        // add records to the log
        $log->warning('Foo');
        $log->error('Bar');
    }
}