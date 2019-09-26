<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\RabbitMQ\Factory;

use Interop\Container\ContainerInterface;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class AMQPStreamConnectionableFactory
 * @package MSBios\RabbitMQ\Factory
 */
class AMQPStreamConnectionableFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return mixed|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new $requestedName(
            $container->get(AMQPStreamConnection::class)
        );
    }
}