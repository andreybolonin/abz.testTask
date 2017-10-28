<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Employee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class LoadEmployeeData extends Fixture
{
    public function load(ObjectManager $manager)
    {

    }
}