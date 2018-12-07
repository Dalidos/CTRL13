<?php

namespace App\Controller;

use DateTime;
use App\Entity\Agenda;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ViewPubController extends AbstractController
{
    /**
     * @Route("/regenere", name="generation")
     */
    public function index()
    {
       

        return $this->render('index/index.html.twig', array("valeurs"=>"test"));
    }
    /**
     * @Route("/agenda", name="agenda")
     */
    public function requeteAgen()
    {
    	$em=$this->getDoctrine()->getManager();
        $agenda=$em->getRepository(Agenda::class)->findByExampleField(new \DateTime());
        $jsonAgenda=json_encode($agenda);
        var_dump($agenda[1]->setdate());
        foreach($agenda as $valeur){
            
        }
       

        return $this->render('index/index.html.twig', array(
            "valeurs"=>$jsonAgenda,
            "agenda"=>$agenda
        ));
    }
}