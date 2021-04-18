<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="Admin")
     */
    public function index(): Response
    { $agence=array("id"=>16,"Nom"=>"Syrine","Telagence"=>71887954,"AdresseVille"=>19);
      $voiture=array("marque"=>"Golf","couleur"=>"bleu","description"=>"luxe et confort","nombre de place"=>4,"nom agence"=>"Syrine");

        return $this->render('admin/index.html.twig',['agence'=>$agence,'voiture'=>$voiture]);
    }
}
