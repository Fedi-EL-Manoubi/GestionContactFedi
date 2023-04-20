<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ContactsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker=Factory::create("fr_FR");
        $genres=["male","female"];
        $contact=new Contact();
        $contact->setNom("$faker->lastName())
                ->setPrenom("$faker->firstName(mt_rand(0,1)))

        $manager->flush();
    }
}
