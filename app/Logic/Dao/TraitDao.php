<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2020-02-04
 * Time: 11:58
 */

namespace App\Logic\Dao;


trait TraitDao
{
    protected static $instance;

    public static function getInstance()
    {
        return self::$instance;
    }
}