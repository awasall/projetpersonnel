<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.not_compromised_password' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/symfony/validator/Constraints/NotCompromisedPasswordValidator.php';

return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(NULL, 'UTF-8', false, NULL);
