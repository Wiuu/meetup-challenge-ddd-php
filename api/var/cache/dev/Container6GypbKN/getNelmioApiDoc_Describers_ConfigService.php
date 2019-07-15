<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.describers.config' shared service.

return $this->privates['nelmio_api_doc.describers.config'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber(['info' => ['title' => 'MeetVonq Meeting', 'description' => 'Meeting Api with Symfony DDD!', 'version' => '1.0.0'], 'securityDefinitions' => ['api_key' => ['type' => 'apiKey', 'description' => 'Your Json Web Token', 'name' => 'authorization', 'in' => 'header']], 'security' => [0 => ['api_key' => []]]]);