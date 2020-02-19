<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        $users = [];

        for ($i = 1; $i <= 10; $i++) {
            $email = (1 === $i) ? 'lolo@gmail.com' : $faker->email;
            $username = (1 === $i) ? 'lolo' : 'user-'.$i;
            $roles = (1 === $i) ? ['ROLE_ADMIN'] : ['ROLE_USER'];

            $user = new User();
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setRoles($roles);
            $user->setPassword(
                $this->passwordEncoder->encodePassword($user, 'test')
            );

            $manager->persist($user);
            $users[$i] = $user;
        }

        $manager->flush();
    }
}
