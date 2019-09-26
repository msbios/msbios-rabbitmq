<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\RabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;

return [

    'service_manager' => [
        'factories' => [
            AMQPStreamConnection::class =>
                Factory\AMQPStreamConnectionFactory::class
        ]
    ],

    Module::class => [
        'host' => 'localhost',
        'port' => 5672,
        'user' => 'guest',
        'password' => 'guest',
        'vhost' => '/',
        'insist' => false,
        'login_method' => 'AMQPLAIN',
        'login_response' => null,
        'locale' => 'en_US',
        'connection_timeout' => 3.0,
        'read_write_timeout' => 3.0,
        'context' => null,
        'keepalive' => false,
        'heartbeat' => 0,
        'channel_rpc_timeout' => 0.0,
        /**
         * @var
         */
        'ssl_protocol' => null

    ]
];