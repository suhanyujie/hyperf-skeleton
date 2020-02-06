<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2020-02-04
 * Time: 09:18
 */

namespace App\Logic\Dao;


class NovelMainDao extends BaseDao
{
    protected $connection = "novel";
    protected $table = "novel_main";

    protected $fillable = [
        'id',
        'name',
        'desc',
        'base_url',
        'list_url',
        'novel_status',
        'insert_date',
        'update_time',
        'delete_flag',
    ];
}
