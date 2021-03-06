<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.yWdNNaf' shared service.

return $this->privates['.service_locator.yWdNNaf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'partenaire' => ['privates', '.errored..service_locator.yWdNNaf.App\\Entity\\Partenaire', NULL, 'Cannot autowire service ".service_locator.yWdNNaf": it references class "App\\Entity\\Partenaire" but no such service exists.'],
    'repo' => ['privates', 'App\\Repository\\TransactionRepository', 'getTransactionRepositoryService.php', true],
    'serializer' => ['services', 'serializer', 'getSerializerService', false],
    'validator' => ['services', 'validator', 'getValidatorService', false],
], [
    'entityManager' => '?',
    'partenaire' => 'App\\Entity\\Partenaire',
    'repo' => 'App\\Repository\\TransactionRepository',
    'serializer' => '?',
    'validator' => '?',
]);
