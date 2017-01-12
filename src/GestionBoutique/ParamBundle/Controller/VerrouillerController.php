<?php
    namespace GestionBoutique\ParamBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class VerrouillerController extends Controller{

        public function verrouillerAction(){

            return $this->render('GestionBoutiqueParamBundle:Verrouiller:verrouiller.html.twig');
        }
    }



?>