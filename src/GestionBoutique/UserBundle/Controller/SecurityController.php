<?php
namespace GestionBoutique\UserBundle\Controller;

use GestionBoutique\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class SecurityController extends Controller {

    public function loginAction(Request $request) {

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
                //redirection vers la page de l'Admin
                return $this->redirectToRoute('page_application');
            }else{
                return $this->redirectToRoute('page_application');
                //sinon redirection vers la page du client
                   #return $this->render('GestionBoutiqueMainBundle:Acceuil:acceuil.html.twig');
            }
        }
        #ok maintenant on va dire au cntroller que si un user arrive dans la page login
        #on verifier sil s'est log ué si cest le cas on le redirige vers sa page daccueil sinon
        #on fait rien on le laisse se connecter
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)

        $authenticationUtils = $this->get('security.authentication_utils');



        //sinon sil sest pas logué redirection vers la page login
        //voila c'est tout le reste tu peux comprendre je crois

        return $this->render('GestionBoutiqueUserBundle:Security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));

    }
    public function loginCheckAction(Request $request){

        $user = new User();

        $form = $request->request->get('form');

        $_username = $form['_username'];
        $_password = $form['_password'];



    }
}
?>