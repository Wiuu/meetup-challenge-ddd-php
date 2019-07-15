<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.access_token_manager.default' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Model/TokenManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Model/TokenManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Entity/TokenManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Model/AccessTokenManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Entity/AccessTokenManager.php';

return $this->privates['fos_oauth_server.access_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\AccessTokenManager(($this->privates['fos_oauth_server.entity_manager'] ?? $this->load('getFosOauthServer_EntityManagerService.php')), 'App\\Authorization\\Entity\\Oauth2\\AccessToken');