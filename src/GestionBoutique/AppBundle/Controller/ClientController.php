<?php
namespace GestionBoutique\AppBundle\Controller;

use GestionBoutique\AppBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller {


    public function listClientAction(Request $request){

        $Client = new Client();

        $formBuilder = $this->createFormBuilder($Client);

        $form = $formBuilder
            ->add('nom'        ,  TextType::class)
            ->add('prenom'     ,  TextType::class)
            ->add('mail'     ,  EmailType::class)
            ->add('telephone'  ,  TextType::class)
            ->add('adresse'    ,  TextType::class)
            ->add('ville'    ,  TextType::class)
            ->add('soumettre'    ,  SubmitType::class, array('label' => 'Soumettre'))
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $Client = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($Client);
            $em->flush();

            $this->addFlash('success' , 'Client created ');

            return $this->redirectToRoute('list_clients');
        }

        $menager = $this->getDoctrine()->getManager();
        $listClient = $menager->getRepository('GestionBoutiqueAppBundle:Client')->findAll();

        return$this->render("GestionBoutiqueAppBundle:Client:listClients.html.twig",array(
            "compteur" => count($listClient),
            "listeClient" => $listClient,
            'form' => $form->createView(),
        ));

    }

    public function getClient($id){

        $repository = $this->getDoctrine()->getManager()->getRepository('GestionBoutiqueAppBundle:Client');

        $Client = $repository->find($id);

        return $Client;
    }

    public function trashClientAction($id){

        $em = $this->getDoctrine()->getManager();
        $em->getRepository('GestionBoutiqueAppBundle:Client')->dropClientById($id);

        return $this->redirectToRoute('list_Clients');

    }

    public function editClientAction($id){

        return $this->render('GestionBoutiqueAppBundle:Client:editClient.html.twig', array(
            'Client' => $this->getClient($id),
        ));
    }

    public function viewClientAction($id){

        #dump($this->getClient($id));die();

        return $this->render('GestionBoutiqueAppBundle:Client:viewClient.html.twig', array(
            'Client' => $this->getClient($id),
        ));
    }
}


?>
