<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\RabbitMQ;

use MSBios\RabbitMQ\Exception\MethodNotAllowedException;
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

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getListenersConfig(): array
    {
        throw new MethodNotAllowedException('Method ');
    }

}