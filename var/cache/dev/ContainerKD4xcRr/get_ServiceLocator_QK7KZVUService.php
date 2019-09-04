<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.QK7KZVU' shared service.

return $this->privates['.service_locator.QK7KZVU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\CompteController::list' => ['privates', '.service_locator.LGNv.VW', 'get_ServiceLocator_LGNv_VWService.php', true],
    'App\\Controller\\CompteController::recherchCompte' => ['privates', '.service_locator.r2jjwcS', 'get_ServiceLocator_R2jjwcSService.php', true],
    'App\\Controller\\CompteController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\DepotController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\DepotController::versement' => ['privates', '.service_locator..dGWmed', 'get_ServiceLocator__DGWmedService.php', true],
    'App\\Controller\\PartenaireController::ajout' => ['privates', '.service_locator.2B8PUum', 'get_ServiceLocator_2B8PUumService.php', true],
    'App\\Controller\\PartenaireController::list' => ['privates', '.service_locator.Vyr21Xo', 'get_ServiceLocator_Vyr21XoService.php', true],
    'App\\Controller\\PartenaireController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\PartenaireController::statut' => ['privates', '.service_locator.l9rHAl0', 'get_ServiceLocator_L9rHAl0Service.php', true],
    'App\\Controller\\PartenaireController::update' => ['privates', '.service_locator.fDbIXxi', 'get_ServiceLocator_FDbIXxiService.php', true],
    'App\\Controller\\RegistrationController::affectation' => ['privates', '.service_locator.9hVzWTa', 'get_ServiceLocator_9hVzWTaService.php', true],
    'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.H3qnu8f', 'get_ServiceLocator_H3qnu8fService.php', true],
    'App\\Controller\\RegistrationController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\RegistrationController::statut' => ['privates', '.service_locator.dzuVBi3', 'get_ServiceLocator_DzuVBi3Service.php', true],
    'App\\Controller\\TransactionController::index' => ['privates', '.service_locator.YtUaFFL', 'get_ServiceLocator_YtUaFFLService.php', true],
    'App\\Controller\\TransactionController::list' => ['privates', '.service_locator.yWdNNaf', 'get_ServiceLocator_YWdNNafService.php', true],
    'App\\Controller\\TransactionController::new' => ['privates', '.service_locator.qBQ4Y9C', 'get_ServiceLocator_QBQ4Y9CService.php', true],
    'App\\Controller\\TransactionController::recherchCode' => ['privates', '.service_locator.EuH9tLI', 'get_ServiceLocator_EuH9tLIService.php', true],
    'App\\Controller\\TransactionController::retrait' => ['privates', '.service_locator.k0Un6ND', 'get_ServiceLocator_K0Un6NDService.php', true],
    'App\\Controller\\TransactionController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\TransactionController::show' => ['privates', '.service_locator.EWX.KyZ', 'get_ServiceLocator_EWX_KyZService.php', true],
    'App\\Controller\\CompteController:list' => ['privates', '.service_locator.LGNv.VW', 'get_ServiceLocator_LGNv_VWService.php', true],
    'App\\Controller\\CompteController:recherchCompte' => ['privates', '.service_locator.r2jjwcS', 'get_ServiceLocator_R2jjwcSService.php', true],
    'App\\Controller\\CompteController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\DepotController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\DepotController:versement' => ['privates', '.service_locator..dGWmed', 'get_ServiceLocator__DGWmedService.php', true],
    'App\\Controller\\PartenaireController:ajout' => ['privates', '.service_locator.2B8PUum', 'get_ServiceLocator_2B8PUumService.php', true],
    'App\\Controller\\PartenaireController:list' => ['privates', '.service_locator.Vyr21Xo', 'get_ServiceLocator_Vyr21XoService.php', true],
    'App\\Controller\\PartenaireController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\PartenaireController:statut' => ['privates', '.service_locator.l9rHAl0', 'get_ServiceLocator_L9rHAl0Service.php', true],
    'App\\Controller\\PartenaireController:update' => ['privates', '.service_locator.fDbIXxi', 'get_ServiceLocator_FDbIXxiService.php', true],
    'App\\Controller\\RegistrationController:affectation' => ['privates', '.service_locator.9hVzWTa', 'get_ServiceLocator_9hVzWTaService.php', true],
    'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.H3qnu8f', 'get_ServiceLocator_H3qnu8fService.php', true],
    'App\\Controller\\RegistrationController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\RegistrationController:statut' => ['privates', '.service_locator.dzuVBi3', 'get_ServiceLocator_DzuVBi3Service.php', true],
    'App\\Controller\\TransactionController:index' => ['privates', '.service_locator.YtUaFFL', 'get_ServiceLocator_YtUaFFLService.php', true],
    'App\\Controller\\TransactionController:list' => ['privates', '.service_locator.yWdNNaf', 'get_ServiceLocator_YWdNNafService.php', true],
    'App\\Controller\\TransactionController:new' => ['privates', '.service_locator.qBQ4Y9C', 'get_ServiceLocator_QBQ4Y9CService.php', true],
    'App\\Controller\\TransactionController:recherchCode' => ['privates', '.service_locator.EuH9tLI', 'get_ServiceLocator_EuH9tLIService.php', true],
    'App\\Controller\\TransactionController:retrait' => ['privates', '.service_locator.k0Un6ND', 'get_ServiceLocator_K0Un6NDService.php', true],
    'App\\Controller\\TransactionController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\TransactionController:show' => ['privates', '.service_locator.EWX.KyZ', 'get_ServiceLocator_EWX_KyZService.php', true],
], [
    'App\\Controller\\CompteController::list' => '?',
    'App\\Controller\\CompteController::recherchCompte' => '?',
    'App\\Controller\\CompteController::setViewHandler' => '?',
    'App\\Controller\\DepotController::setViewHandler' => '?',
    'App\\Controller\\DepotController::versement' => '?',
    'App\\Controller\\PartenaireController::ajout' => '?',
    'App\\Controller\\PartenaireController::list' => '?',
    'App\\Controller\\PartenaireController::setViewHandler' => '?',
    'App\\Controller\\PartenaireController::statut' => '?',
    'App\\Controller\\PartenaireController::update' => '?',
    'App\\Controller\\RegistrationController::affectation' => '?',
    'App\\Controller\\RegistrationController::register' => '?',
    'App\\Controller\\RegistrationController::setViewHandler' => '?',
    'App\\Controller\\RegistrationController::statut' => '?',
    'App\\Controller\\TransactionController::index' => '?',
    'App\\Controller\\TransactionController::list' => '?',
    'App\\Controller\\TransactionController::new' => '?',
    'App\\Controller\\TransactionController::recherchCode' => '?',
    'App\\Controller\\TransactionController::retrait' => '?',
    'App\\Controller\\TransactionController::setViewHandler' => '?',
    'App\\Controller\\TransactionController::show' => '?',
    'App\\Controller\\CompteController:list' => '?',
    'App\\Controller\\CompteController:recherchCompte' => '?',
    'App\\Controller\\CompteController:setViewHandler' => '?',
    'App\\Controller\\DepotController:setViewHandler' => '?',
    'App\\Controller\\DepotController:versement' => '?',
    'App\\Controller\\PartenaireController:ajout' => '?',
    'App\\Controller\\PartenaireController:list' => '?',
    'App\\Controller\\PartenaireController:setViewHandler' => '?',
    'App\\Controller\\PartenaireController:statut' => '?',
    'App\\Controller\\PartenaireController:update' => '?',
    'App\\Controller\\RegistrationController:affectation' => '?',
    'App\\Controller\\RegistrationController:register' => '?',
    'App\\Controller\\RegistrationController:setViewHandler' => '?',
    'App\\Controller\\RegistrationController:statut' => '?',
    'App\\Controller\\TransactionController:index' => '?',
    'App\\Controller\\TransactionController:list' => '?',
    'App\\Controller\\TransactionController:new' => '?',
    'App\\Controller\\TransactionController:recherchCode' => '?',
    'App\\Controller\\TransactionController:retrait' => '?',
    'App\\Controller\\TransactionController:setViewHandler' => '?',
    'App\\Controller\\TransactionController:show' => '?',
]);
