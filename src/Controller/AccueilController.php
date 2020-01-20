<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    // propriété
    public $prenom = 'mimz';
    public $nom ='alien';

    /**
     * @Route("/", name="accueil")
     * methode
     */
    public function accueil()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'prenom' => $this->prenom,
        ]);
    }

    private function coller(){
        return $this->prenom . " " .$this->nom;
    }

    // public function connected()
    // {
    //     return $this->render('accueil/index.html.twig', [
    //         'controller_name' => 'AccueilController',
    //         'prenom' => $this->coller(),
    //     ]);
    // }

    /**
     * @Route("/CMS", name="panneau_conf")
     * methode
     * panneau de configuration
     */



    public function panneau_configuration()
    {
        return $this->render('CMS/admin.html.twig', [
            'controller_name' => 'AccueilController',
            'prenom' => $this->coller(),
        ]);
    }



}
