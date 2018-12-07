<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Agenda;
use App\Entity\TodoList;
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

    $agenda=new Agenda();
    $agenda->setDate(new \DateTime('2018-12-9'));
    $agenda->setAction("vivre");
    $agenda->setDescription("voila");
    $agenda->setDateFin(new \DateTime('2018-12-13'));
    $manager->persist($agenda);
    $agenda2=new Agenda();
    $agenda2->setDate(new \DateTime('2018-12-15  03:00:00'));
    $agenda2->setAction("rdv avec maman");
    $agenda2->setDescription("si si je t'assure que c'est vrai");
    $agenda2->setDateFin(new \DateTime('2018-12-15  05:00:00'));
    $manager->persist($agenda2);



    $todo=new TodoList();
    $todo->setNom("Faire à manger");
    $todo->setDescription("Bah t'est con ou quoi");
    $todo->setDate(new \DateTime());
    $todo->setImportance(0);
    $todo->setAgenda($agenda);
    $manager->persist($todo);
    $todo2=new TodoList();
    $todo2->setNom("Faire la vaisselle");
    $todo2->setDate(new \DateTime());
    $todo2->setImportance(0);
    $manager->persist($todo2);
    $todo3=new TodoList();
    $todo3->setNom("manger");
    $todo3->setDate(new \DateTime());
    $todo3->setImportance(0);
    $manager->persist($todo3);

    $manager->flush();
    }
}
