<?php
/**
 * Created by PhpStorm.
 * User: suhanyu
 * Date: 2020-02-04
 * Time: 09:08
 */

namespace App\Controller;

use App\Logic\Dao\NovelMainDao;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;

/**
 * 小说功能控制器
 * Class NovelController
 * @package App\Controller
 * @Controller()
 */
class NovelController
{
    /**
     * @RequestMapping(path="index", methods={"get","post"})
     */
    public function index(RequestInterface $request)
    {
        $list = (new NovelMainDao)->where([])->get();
        var_dump($list);
        return [1,2,3];
    }
}
