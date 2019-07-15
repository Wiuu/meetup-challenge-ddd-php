<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.describers.route.default' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/DescriberInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/ModelRegistryAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/ModelRegistryAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/RouteDescriber.php';

return $this->privates['nelmio_api_doc.describers.route.default'] = new \Nelmio\ApiDocBundle\Describer\RouteDescriber(($this->privates['nelmio_api_doc.routes.default'] ?? $this->load('getNelmioApiDoc_Routes_DefaultService.php')), ($this->privates['nelmio_api_doc.controller_reflector'] ?? $this->load('getNelmioApiDoc_ControllerReflectorService.php')), new RewindableGenerator(function () {
    yield 0 => ($this->privates['nelmio_api_doc.route_describers.route_metadata'] ?? ($this->privates['nelmio_api_doc.route_describers.route_metadata'] = new \Nelmio\ApiDocBundle\RouteDescriber\RouteMetadataDescriber()));
    yield 1 => ($this->privates['nelmio_api_doc.route_describers.php_doc'] ?? ($this->privates['nelmio_api_doc.route_describers.php_doc'] = new \Nelmio\ApiDocBundle\RouteDescriber\PhpDocDescriber()));
}, 2));
