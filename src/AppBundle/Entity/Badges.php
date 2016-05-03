<?php

namespace AppBundle\Entity;

/**
 * Badges
 */
class Badges
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomBadge;
    
    private $fid_user_badges;


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
     * Set nomBadge
     *
     * @param string $nomBadge
     *
     * @return Badges
     */
    public function setNomBadge($nomBadge)
    {
        $this->nomBadge = $nomBadge;

        return $this;
    }

    /**
     * Get nomBadge
     *
     * @return string
     */
    public function getNomBadge()
    {
        return $this->nomBadge;
    }
}

