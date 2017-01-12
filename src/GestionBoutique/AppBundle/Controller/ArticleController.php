<?php
namespace GestionBoutique\AppBundle\Controller;

use GestionBoutique\AppBundle\Entity\Article;
use GestionBoutique\AppBundle\Entity\Fournisseur;
use GestionBoutique\AppBundle\Repository\FournisseurRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller {


    public function listArticleAction(Request $request){

        $article= new Article();

        $formBuilder = $this->createFormBuilder($article);

        $form = $formBuilder
            ->add('libelle' , TextType::class)
            ->add('quantite' , IntegerType::class)
            ->add('prixVenteUnit' , MoneyType::class)
            ->add('prixAchatUnit' ,MoneyType::class)
            ->add('description' , TextareaType::class)
            ->add('fournisseur' , EntityType::class , array(
                'placeholder' => 'choisit le fournisseur',
                'class' => Fournisseur::class,
                'query_builder' => function(FournisseurRepository $repos){
                    return $repos->createAlphabeticalQueryBuilder();
                },
            ))
            ->add('soumettre'    ,  SubmitType::class, array('label' => 'Soumettre'))
            ->getForm()
        ;

        $form->handleRequest($request);

        if ( $form->isSubmitted()&& $form->isValid()){

            $article= $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash('success' , 'Article created - you have a new article');

            return $this->redirectToRoute('list_articles');
        }

        $menager = $this->getDoctrine()->getManager();
        $listArticle = $menager->getRepository('GestionBoutiqueAppBundle:Article')->findAll();

        return $this->render("GestionBoutiqueAppBundle:Article:listArticles.html.twig",array(
            'ArticleForm' => $form->createView(),
            'listeArticle' => $listArticle,
            'compteur' => count($listArticle),
        ));

    }

    public function getArticle($id){

        $repository = $this->getDoctrine()->getManager()->getRepository('GestionBoutiqueAppBundle:Article');

        $article= $repository->find($id);

        return $article;
    }
}



?>