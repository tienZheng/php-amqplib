<?php
/**
 * Created by PhpStorm.
 * User: Tien
 * Date: 2019/11/11
 * Time: 9:59 AM
 * @author zhengcheng@flowerplus.cn
 */

namespace app\server;


interface SubscribeServer
{

    /**
     * :绑定到某个主题
     *
     * @param string $topic
     * @return mixed
     * @author zhengcheng@flowerplus.cn
     */
    public function bind(string $topic);
}