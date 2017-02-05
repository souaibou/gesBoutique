<?php
namespace GestionBoutique\AppBundle\Controller;

use GestionBoutique\AppBundle\Entity\Fournisseur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class FournisseurController extends Controller {


    public function listFournisseurAction(Request $request){

        $fournisseur = new Fournisseur();

        $formBuilder = $this->createFormBuilder($fournisseur);

        $form = $formBuilder
            ->add('nom'        ,  TextType::class)
            ->add('prenom'     ,  TextType::class)
            ->add('adresse'    ,  TextType::class)
            ->add('telephone'  ,  TextType::class)
            ->add('mail'     ,  EmailType::class)
            ->add('ville'    ,  TextType::class)
            ->add('soumettre'    ,  SubmitType::class, array('label' => 'Soumettre'))
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()){

            $fournisseur = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($fournisseur);
            $em->flush();

            $this->addFlash('success' , 'Fournisseur created ');

            return $this->redirectToRoute('list_fournisseurs');
        }

        $menager = $this->getDoctrine()->getManager();
        $listFournisseur = $menager->getRepository('GestionBoutiqueAppBundle:Fournisseur')->findAll();

        return$this->render("GestionBoutiqueAppBundle:Fournisseur:listFournisseurs.html.twig",array(
            "compteur" => count($listFournisseur),
            "listeFournisseur" => $listFournisseur,
            'form' => $form->createView(),
        ));

    }

    public function getFournisseur($id){

        $repository = $this->getDoctrine()->getManager()->getRepository('GestionBoutiqueAppBundle:Fournisseur');

        $fournisseur = $repository->find($id);

        return $fournisseur;
    }

    public function trashFournisseurAction($id){

        $em = $this->getDoctrine()->getManager();
        $em->getRepository('GestionBoutiqueAppBundle:Fournisseur')->dropFournisseurById($id);

        return $this->redirectToRoute('list_fournisseurs');

    }

    public function editFournisseurAction($id){

        return $this->render('GestionBoutiqueAppBundle:Fournisseur:editFournisseur.html.twig', array(
            'fournisseur' => $this->getFournisseur($id),
        ));
    }

    public function viewFournisseurAction($id){

        #dump($this->getFournisseur($id));die();

        return $this->render('GestionBoutiqueAppBundle:Fournisseur:viewFournisseur.html.twig', array(
            'fournisseur' => $this->getFournisseur($id),
        ));
    }
}


?>
