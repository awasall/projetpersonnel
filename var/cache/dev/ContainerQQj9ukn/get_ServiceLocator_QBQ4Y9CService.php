<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.qBQ4Y9C' shared service.

return $this->privates['.service_locator.qBQ4Y9C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'transy' => ['privates', 'App\\Repository\\TarifRepository', 'getTarifRepositoryService.php', true],
    'validator' => ['services', 'validator', 'getValidatorService', false],
], [
    'transy' => 'App\\Repository\\TarifRepository',
    'validator' => '?',
]);
