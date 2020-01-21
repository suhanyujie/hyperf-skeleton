<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2020-01-21
 * Time: 14:00
 */

namespace App\Providers;

use Psr\Container\ContainerInterface;

class StdoutLoggerFactoryProvider
{
    public function __invoke(ContainerInterface $container)
    {
        return Log::get('sys');
    }
}
