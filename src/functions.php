<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

if (! function_exists('warning')) {

    function warning($message, array $context = [])
    {
        $fileName = 'store-service-'.date('Y-m-d').'.log';
        $file = storage_path('logs/'.$fileName);
        // create a log channel
        $log = new Logger($message);
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));

        // add records to the log
        $log->warning($message, $context);
    }
}


if (! function_exists('error')) {
    function error($message, array $context = [])
    {
        $fileName = 'store-service-'.date('Y-m-d').'.log';
        $file = storage_path('logs/'.$fileName);
        $log = new Logger($message);
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->error($message, $context);
    }
}



if (! function_exists('emergency')) {
    function emergency($message, array $context = [])
    {
        $fileName = 'store-service-'.date('Y-m-d').'.log';
        $file = storage_path('logs/'.$fileName);
        $log = new Logger($message);
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->emergency($message, $context);
    }
}



if (! function_exists('notice')) {
    function notice($message, array $context = [])
    {
        $fileName = 'store-service-'.date('Y-m-d').'.log';
        $file = storage_path('logs/'.$fileName);
        $log = new Logger($message);
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->notice($message, $context);
    }
}


if (! function_exists('info')) {
    function info($message, array $context = [])
    {
        $fileName = 'store-service-'.date('Y-m-d').'.log';
        $file = storage_path('logs/'.$fileName);
        $log = new Logger($message);
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->info($message, $context);
    }
}

if (! function_exists('debug')) {
    function debug($message, array $context = [])
    {
        $fileName = 'store-service-'.date('Y-m-d').'.log';
        $file = storage_path('logs/'.$fileName);
        $log = new Logger($message);
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->debug($message, $context);
    }
}


if (! function_exists('blog')) {
    function blog($level,$message, array $context = [])
    {
        $fileName = 'store-service-'.date('Y-m-d').'.log';
        $file = storage_path('logs/'.$fileName);
        $log = new Logger($message);
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->log($level,$message, $context);
    }
}
