<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2020-01-21
 * Time: 14:05
 */

namespace App\Providers;

use Hyperf\Logger\Logger;
use Hyperf\Logger\LoggerFactory;
use Hyperf\Utils\ApplicationContext;

class Log
{
    public static function get(string $name = 'app')
    {
        return ApplicationContext::getContainer()->get(LoggerFactory::class)->make($name);
    }
}
