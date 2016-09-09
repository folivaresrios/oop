<?php

namespace Styde;

class Log
{
    protected static $logger;

    public static function setLogger(Logger $logger)
    {
        self::$logger = $logger;
    }

    public static function info($message)
    {
        static::$logger->info($message);
    }
}