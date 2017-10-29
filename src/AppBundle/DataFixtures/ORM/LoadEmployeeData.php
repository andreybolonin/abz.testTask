<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Employee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class LoadEmployeeData extends Fixture
{
    public function load(ObjectManager $em)
    {
        $faker = Factory::create('ru_RU');
        for ($i = 0; $i < 20; $i++) {
            $employee = new Employee();
            $employee->setName($faker->name);
            $employee->setPosition($faker->jobTitle);
            $employee->setSalary($faker->numberBetween($min = 1000, $max = 15000));
            $em->persist($employee);
        }
        $em->flush();
    }
}