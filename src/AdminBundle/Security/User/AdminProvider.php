<?php
namespace AdminBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use AdminBundle\Security\User\CpoAdmin;

class AdminProvider implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        if ($username != "admin") {
            throw new UsernameNotFoundException(
                sprintf('Username "%s" does not exist.', $username)
            );
        }

        $username = "admin";
        $password = "6dc97ab69527df4c4a8780e45467febdb4c5411d963b760b54a22557a3cabdfeedef7c1dacf9f499b69fbb8cfb73a8f61809f2cd026075604c80231453e511d6";
        $salt = "123";
        $roles = array("ROLE_ADMIN");

        return new CpoAdmin($username, $password, $salt, $roles);
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof CpoAdmin) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'AdminBundle\Security\User\CpoAdmin';
    }
}
