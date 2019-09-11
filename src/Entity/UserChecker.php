<?php

namespace App\Entity;
use Exception;
use App\Entity\User as User;
use App\Exception\AccountDeletedException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof User) {
            return '';
        }
        if($user->getStatut()!="actif")
        {
            throw new Exception('veuillez contacter votre administrateur');
 
        }

        if($user->getPartenaire()!=NULL && $user->getPartenaire()->getStatut()!="actif")
        {
            throw new Exception('veuillez contacter Wari vous etes bloqué');
 
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
        if (!$user instanceof AppUser) {
            return;
        }
        
        // user account is expired, the user may be notified
        if ($user->isExpired()) {
            throw new AccountExpiredException('...');
        }
    }
}