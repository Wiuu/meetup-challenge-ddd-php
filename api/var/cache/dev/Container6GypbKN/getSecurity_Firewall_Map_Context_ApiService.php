<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.api' shared service.

$a = ($this->services['router'] ?? $this->getRouterService());

return $this->privates['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.authentication.listener.fos_oauth_server.api'] ?? $this->load('getSecurity_Authentication_Listener_FosOauthServer_ApiService.php'));
    yield 2 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', NULL), 'api', new \FOS\OAuthServerBundle\Security\EntryPoint\OAuthEntryPoint(($this->privates['fos_oauth_server.server'] ?? $this->load('getFosOauthServer_ServerService.php'))), NULL, NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'security.user_checker', '.security.request_matcher.p4VlLPC', true, true, 'security.user.provider.concrete.in_memory', NULL, 'fos_oauth_server.security.entry_point', NULL, NULL, [0 => 'fos_oauth'], NULL));
