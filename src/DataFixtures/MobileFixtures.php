<?php

namespace App\DataFixtures;
use App\Entity\Mobile;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MobileFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {   
        for($i=1;$i <= 20;$i++){
            $mobile = new Mobile;
            $mobile -> setName("");
            $mobile -> setPrice("1");
            $mobile -> setBrand("");
            $mobile -> setChip("");
            $mobile -> setCPU("");
            $mobile -> setMemory("");
            $mobile -> setBackCam("");
            $mobile -> setFrontCam("");
            $mobile -> setScreenSize("");
            $mobile -> setScreenTech("");
            $mobile -> setOS("");
            $manager -> persist($mobile);
        }
        
        $manager->flush();
    }
}
