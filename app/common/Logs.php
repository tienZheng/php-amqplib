<?php
/**
 * Created by PhpStorm.
 * User: Tien
 * Date: 2019/11/10
 * Time: 8:35 PM
 * @author zhengcheng@flowerplus.cn
 */

namespace app\common;

class Logs
{

    public static function formatContent(string $content): string
    {
        $msg = date('Y-m-d H:i:s') . '; ' . $content . PHP_EOL;
        return $msg;
    }

    /**
     * :写日志
     *
     * @param string $msg
     * @param string $filename
     * @return bool|int
     * @author zhengcheng@flowerplus.cn
     */
    public static function write(string $msg, string $filename)
    {
        $destination = __DIR__ . '/../../log/' . $filename . '.log';
        return file_put_contents($destination, $msg);
    }

}