<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    /***
     * post 请求测试
     */
    public function post()
    {
        $list = [1,2,3];
        $list = collect($list)->map(function ($item) {
            $item += 10;
            return $item;
        });
        return [
            'err_no'  => 0,
            'err_msg' => 'success',
            'results' => $list,
        ];
    }
}
