<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.fos_oauth_server.api' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Security/Authentication/Provider/OAuthProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-core/User/InMemoryUserProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-core/User/UserChecker.php';

return $this->privates['security.authentication.provider.fos_oauth_server.api'] = new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider(new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]), ($this->privates['fos_oauth_server.server'] ?? $this->load('getFosOauthServer_ServerService.php')), new \Symfony\Component\Security\Core\User\UserChecker());
