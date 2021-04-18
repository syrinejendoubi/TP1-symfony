<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture/ajouter", name="AjouterVoiture")
     */
    public function index(): Response
    {
        return $this->render('voiture/ajouter.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
    /**
     * @Route("/voiture/modifier/{id}", name="ModifierVoiture")
     */
    public function modifier($id)
    {
        return $this->render('voiture/modifier.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
    /**
     * @Route("/voiture/supprimer/{id}", name="SupprimerVoiture")
     */
    public function supprimer($id)
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
    
}
