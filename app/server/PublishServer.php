<?php
/**
 * Created by PhpStorm.
 * User: Tien
 * Date: 2019/11/11
 * Time: 9:49 AM
 * @author zhengcheng@flowerplus.cn
 */

namespace app\server;


interface PublishServer
{

    /**
     * :发布一条消息到某个主题中
     *
     * @param $msg
     * @param string $topic
     * @return mixed
     * @author zhengcheng@flowerplus.cn
     */
    public function send($msg, string $topic);
}