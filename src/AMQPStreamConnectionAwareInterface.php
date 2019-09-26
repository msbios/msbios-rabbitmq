<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\RabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * Interface AMQPStreamConnectionAwareInterface
 * @package MSBios\RabbitMQ
 */
interface AMQPStreamConnectionAwareInterface
{
    /**
     * @return AMQPStreamConnection
     */
    public function getAMQPStreamConnection(): AMQPStreamConnection;

    /**
     * @param AMQPStreamConnection $AMQPStreamConnection
     * @return $this
     */
    public function setAMQPStreamConnection(AMQPStreamConnection $AMQPStreamConnection): self;
}