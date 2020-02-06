<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2020-02-04
 * Time: 11:57
 */

namespace App\Logic\Dao;

use App\Model\Model;

class BaseDao extends Model
{
    use TraitDao;

    public static function getModel()
    {

    }
}
