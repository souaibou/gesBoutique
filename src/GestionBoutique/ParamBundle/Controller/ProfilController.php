<?php
    namespace GestionBoutique\ParamBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class ProfilController extends Controller {

        public function profilAction(){

            return $this->render('GestionBoutiqueParamBundle:Profil:profil.html.twig');
        }
    }




?>