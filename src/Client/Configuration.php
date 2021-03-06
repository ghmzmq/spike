<?php
/**
 * Spike library
 * @author Tao <taosikai@yeah.net>
 */
namespace Spike\Client;

use Spike\Exception\InvalidArgumentException;
use Spike\Configuration as BaseConfiguration;

class Configuration extends BaseConfiguration
{
    public function getServerAddress()
    {
        $address = $this->get('server-address', '127.0.0.1:8088');
        return $address;
    }

    public function getDefaultConfigFile()
    {
        return getcwd() . '/' . 'spike.json';
    }
}