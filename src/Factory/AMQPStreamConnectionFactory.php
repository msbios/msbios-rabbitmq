<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\RabbitMQ\Factory;

use Interop\Container\ContainerInterface;
use MSBios\RabbitMQ\Module;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class AMQPStreamConnectionFactory
 * @package MSBios\RabbitMQ\Factory
 */
class AMQPStreamConnectionFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return object|AMQPStreamConnection
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $options */
        $options = $container->build(Module::class, $options);

        return new AMQPStreamConnection(
            $options['host'],
            $options['port'],
            $options['user'],
            $options['password'],
            $options['vhost'],
            $options['insist'],
            $options['login_method'],
            $options['login_response'],
            $options['locale'],
            $options['connection_timeout'],
            $options['read_write_timeout'],
            $options['context'],
            $options['keepalive'],
            $options['heartbeat'],
            $options['channel_rpc_timeout'],
            $options['ssl_protocol']
        );
    }
}