<?php

namespace GestionBoutique\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 */
class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var int
     */
    private $quantite;

    /**
     * @var float
     */
    private $prixVenteUnit;

    /**
     * @var float
     */
    private $prixAchatUnit;

    /**
     * @var string
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Fournisseur", inversedBy="articles")
     * @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="id")
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
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixVenteUnit
     *
     * @param float $prixVenteUnit
     *
     * @return Article
     */
    public function setPrixVenteUnit($prixVenteUnit)
    {
        $this->prixVenteUnit = $prixVenteUnit;

        return $this;
    }

    /**
     * Get prixVenteUnit
     *
     * @return float
     */
    public function getPrixVenteUnit()
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
    public function setPrixAchatUnit($prixAchatUnit)
    {
        $this->prixAchatUnit = $prixAchatUnit;

        return $this;
    }

    /**
     * Get prixAchatUnit
     *
     * @return float
     */
    public function getPrixAchatUnit()
    {
        return $this->prixAchatUnit;
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
     * Set fournisseur
     *
     * @param \GestionBoutique\AppBundle\Entity\Fournisseur $fournisseur
     *
     * @return Article
     */
    public function setFournisseur(\GestionBoutique\AppBundle\Entity\Fournisseur $fournisseur = null)
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
