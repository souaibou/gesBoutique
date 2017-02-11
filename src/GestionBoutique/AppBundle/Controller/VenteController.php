<?php
namespace GestionBoutique\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VenteController extends Controller{

    public function venteAction() {

        return $this->render('GestionBoutiqueAppBundle:Vente:vente.html.twig');
    }
}