<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_oauth_server.client_manager.default' shared service.

return $this->services['fos_oauth_server.client_manager.default'] = new \FOS\OAuthServerBundle\Entity\ClientManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), 'App\\Authorization\\Entity\\Oauth2\\Client');