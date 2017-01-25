<?php

namespace GestionBoutique\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table(name="ligne_commande")
 * @ORM\Entity(repositoryClass="GestionBoutique\AppBundle\Repository\LigneCommandeRepository")
 */
class LigneCommande
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
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="GestionBoutique\AppBundle\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;
    /**
     * @ORM\ManyToOne(targetEntity="GestionBoutique\AppBundle\Entity\Commande")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;

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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return LigneCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set article
     *
     * @param \GestionBoutique\AppBundle\Entity\Article $article
     *
     * @return LigneCommande
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

    /**
     * Set commande
     *
     * @param \GestionBoutique\AppBundle\Entity\Commande $commande
     *
     * @return LigneCommande
     */
    public function setCommande(\GestionBoutique\AppBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \GestionBoutique\AppBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
