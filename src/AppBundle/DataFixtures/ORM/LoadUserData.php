<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Job;

/**
 * Class LoadJobData
 * @package AppBundle\DataFixtures\ORM
 */
class LoadUserData implements FixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $users = [
            (object)[
                'name' => 'Matt Johnson',
                'email' => 'some.email@johnothecoder.uk'
            ]
        ];

        foreach($users as $seed){
            $user = new User();
            $user->setName($seed->name);
            $user->setEmail($seed->email);
            $manager->persist($user);
        }

        $manager->flush();
    }
}