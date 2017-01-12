<?php
    namespace GestionBoutique\AppBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class ApplicationController extends Controller{
        public function indexAction(){
            return $this->render("GestionBoutiqueAppBundle:Application:index.html.twig");
        }
    }




?>