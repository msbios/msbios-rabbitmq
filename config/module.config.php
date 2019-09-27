<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\RabbitMQ;

return [

    Module::class => [

        /**
         * Expects: string
         * Default: localhost
         */
        'host' => 'localhost',

        /**
         * Expects: int
         * Default: 5672
         */
        'port' => 5672,

        /**
         * Expects: string
         * Default: guest
         */
        'user' => 'guest',

        /**
         * Expects: string
         * Default: guest
         */
        'password' => 'guest',

        /**
         * Expects: string
         * Default: /
         */
        'vhost' => '/',

        /**
         * Expects: bool
         * Default: false
         */
        'insist' => false,

        /**
         * Expects: string
         * Default: AMQPLAIN
         */
        'login_method' => 'AMQPLAIN',

        /**
         * Expects: bool
         * Default: null
         */
        'login_response' => null,

        /**
         * Expects: string
         * Default: en_US
         */
        'locale' => 'en_US',

        /**
         * Expects: float
         * Default: 3.0
         */
        'connection_timeout' => 3.0,

        /**
         * Expects: float
         * Default: 3.0
         */
        'read_write_timeout' => 3.0,

        /**
         * Expects: bool
         * Default: null
         */
        'context' => null,

        /**
         * Expects: bool
         * Default: false
         */
        'keepalive' => false,

        /**
         * Expects: int
         * Default: 0
         */
        'heartbeat' => 0,

        /**
         * Expects: float
         * Default: 0.0
         */
        'channel_rpc_timeout' => 0.0,

        /**
         * Expects: bool
         * Default: null
         */
        'ssl_protocol' => null
    ]
];