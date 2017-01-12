<?php

namespace GestionBoutique\AuthenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="GestionBoutique\AuthenBundle\Repository\AdminRepository")
 */
class Admin
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
     * @ORM\OneToOne(targetEntity="GestionBoutique\UserBundle\Entity\User", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

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
     * Set user
     *
     * @param \GestionBoutique\UserBundle\Entity\User $user
     *
     * @return Admin
     */
    public function setUser(\GestionBoutique\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \GestionBoutique\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
