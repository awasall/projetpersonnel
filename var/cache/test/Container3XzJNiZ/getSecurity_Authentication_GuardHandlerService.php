<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.guard_handler' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-guard/GuardAuthenticatorHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

$this->privates['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), [0 => 'login', 1 => 'api']);

$instance->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

return $instance;
