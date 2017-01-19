<?php

namespace GestionBoutique\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="GestionBoutique\AppBundle\Repository\ArticleRepository")
 */
class Article
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=40)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prixVenteUnit", type="float")
     */
    private $prixVenteUnit;

    /**
     * @var float
     *
     * @ORM\Column(name="prixAchatUnit", type="float")
     */
    private $prixAchatUnit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAchat", type="date")
     */
    private $dateAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="GestionBoutique\AppBundle\Entity\Fournisseur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fournisseur;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Article
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set prixVenteUnit
     *
     * @param float $prixVenteUnit
     *
     * @return Article
     */
    public function setprixVenteUnit($prixVenteUnit)
    {
        $this->prixVenteUnit = $prixVenteUnit;

        return $this;
    }

    /**
     * Get prixVenteUnit
     *
     * @return float
     */
    public function getprixVenteUnit()
    {
        return $this->prixVenteUnit;
    }

    /**
     * Set prixAchatUnit
     *
     * @param float $prixAchatUnit
     *
     * @return Article
     */
    public function setprixAchatUnit($prixAchatUnit)
    {
        $this->prixAchatUnit = $prixAchatUnit;

        return $this;
    }

    /**
     * Get prixAchatUnit
     *
     * @return float
     */
    public function getprixAchatUnit()
    {
        return $this->prixAchatUnit;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     *
     * @return Article
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Article
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set fournisseur
     *
     * @param \GestionBoutique\AppBundle\Entity\Fournisseur $fournisseur
     *
     * @return Article
     */
    public function setFournisseur(\GestionBoutique\AppBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \GestionBoutique\AppBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }
}
