<?php
    namespace GestionBoutique\AppBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class ApplicationController extends Controller{
        public function indexAction(){

            $token = $this->get('security.token_storage')->getToken();
            $user = $token->getUser();
    
            return $this->render("GestionBoutiqueAppBundle:Application:index.html.twig", array(
                'user' => $user,
            ));
        }
    }




?>