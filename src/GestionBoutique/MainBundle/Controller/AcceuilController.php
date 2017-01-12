<?php
    namespace GestionBoutique\MainBundle\Controller;


    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class AcceuilController extends Controller {

        public function acceuilAction(){
            
            return $this->render('GestionBoutiqueMainBundle:Acceuil:acceuil.html.twig');
        }
    }