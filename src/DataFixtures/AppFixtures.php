<?php

namespace App\DataFixtures;

use App\Entity\Cathegorie;
use App\Entity\Inventaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
// create 20 products! Bam!

    $Category = new Cathegorie();
    $Category->setNom('vivres ');
    $manager->persist($Category);

    $Category = new Cathegorie();
    $Category->setNom('outils ');
    $manager->persist($Category);

    $Category = new Cathegorie(); 
    $Category->setNom('materiel ');
    $manager->persist($Category);


    $inventaire = new Inventaire(); 
    $inventaire->setNom('clime ');
    $inventaire->setMinimal(20 );
    $inventaire->setQuantite(100 );
    $inventaire->setMoyenne(50 );
    $manager->persist($inventaire);

    $inventaire = new Inventaire(); 
    $inventaire->setNom('nouritures ');
    $inventaire->setMinimal(20 );
    $inventaire->setQuantite(100 );
    $inventaire->setMoyenne(50 );
    $manager->persist($inventaire);

    $inventaire = new Inventaire(); 
    $inventaire->setNom('eaux ');
    $inventaire->setMinimal(20 );
    $inventaire->setQuantite(100 );
    $inventaire->setMoyenne(50 );
    $manager->persist($inventaire);

    $inventaire = new Inventaire(); 
    $inventaire->setNom('energie ');
    $inventaire->setMinimal(20 );
    $inventaire->setQuantite(100 );
    $inventaire->setMoyenne(50 );
    $manager->persist($inventaire);

    $inventaire = new Inventaire(); 
    $inventaire->setNom('kit secoures ');
    $inventaire->setMinimal(20 );
    $inventaire->setQuantite(100 );
    $inventaire->setMoyenne(50 );
    $manager->persist($inventaire);

    $inventaire = new Inventaire(); 
    $inventaire->setNom('oxigene' );
    $inventaire->setMinimal(20 );
    $inventaire->setQuantite(100 );
    $inventaire->setMoyenne(50 );
    $manager->persist($inventaire);

    $inventaire = new Inventaire(); 
    $inventaire->setNom('stockages ');
    $inventaire->setMinimal(20);
    $inventaire->setQuantite(100 );
    $inventaire->setMoyenne(50 );
    $manager->persist($inventaire);

    $manager->flush();
    }
}
