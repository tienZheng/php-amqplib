<?php
/**
 * Created by PhpStorm.
 * User: Tien
 * Date: 2019/11/10
 * Time: 8:43 PM
 * @author zhengcheng@flowerplus.cn
 */

namespace app\server;


use app\common\Config;
use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Connection\AMQPStreamConnection;

final class Factory
{

    /**
     * @var AbstractConnection|null
     */
    public static $connection;

    /**
     * @var AMQPChannel|null
     */
    public static $channel;

    public static function createConnection(): AbstractConnection
    {
        if (!self::$connection) {
            self::$connection = new AMQPStreamConnection(Config::HOST, Config::PORT, Config::USER, Config::PASS, Config::V_HOST);
        }

        return self::$connection;
    }


    public static function createChannel(bool $fresh = false)
    {
        if (!self::$connection) {
            return null;
        }

        if (!$fresh && self::$channel) {
            return self::$channel;
        }

        self::$channel = self::$connection->channel();

        return self::$channel;
    }


    public static function close()
    {
        self::$channel->close();
        self::$connection->close();
    }
}