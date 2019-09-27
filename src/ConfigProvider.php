<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\RabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * Class ConfigProvider
 * @package MSBios\RabbitMQ
 */
class ConfigProvider extends \MSBios\ConfigProvider
{
    /**
     * @return array
     */
    public function getDependencyConfig(): array
    {
        return [
            'factories' => [
                AMQPStreamConnection::class =>
                    Factory\AMQPStreamConnectionFactory::class
            ]
        ];
    }
}