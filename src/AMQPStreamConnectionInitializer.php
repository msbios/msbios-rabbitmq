<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\RabbitMQ;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class AMQPStreamConnectionInitializer
 * @package MSBios\RabbitMQ
 */
class AMQPStreamConnectionInitializer implements InitializerInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param object $instance
     */
    public function __invoke(ContainerInterface $container, $instance)
    {

    }

    /**
     * @param $an_array
     * @return AMQPStreamConnectionInitializer
     */
    public static function __set_state($an_array): self
    {
        return new self();
    }


}