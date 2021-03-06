<?php

namespace GestionBoutique\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="GestionBoutique\AppBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLivraison", type="date")
     */
    private $dateLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="maniereLivraison", type="string", length=12)
     */
    private $maniereLivraison;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="GestionBoutique\AppBundle\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return Commande
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set maniereLivraison
     *
     * @param string $maniereLivraison
     *
     * @return Commande
     */
    public function setManiereLivraison($maniereLivraison)
    {
        $this->maniereLivraison = $maniereLivraison;

        return $this;
    }

    /**
     * Get maniereLivraison
     *
     * @return string
     */
    public function getManiereLivraison()
    {
        return $this->maniereLivraison;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Commande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set article
     *
     * @param \GestionBoutique\AppBundle\Entity\Article $article
     *
     * @return Commande
     */
    public function setArticle(\GestionBoutique\AppBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \GestionBoutique\AppBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
