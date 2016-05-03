<?php

namespace AppBundle\Entity;

/**
 * Activites
 */
class Activites
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomActivite;

    private $fidCategorie;

    private $fid_Activites_User;


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
     * Set nomActivite
     *
     * @param string $nomActivite
     *
     * @return Activites
     */
    public function setNomActivite($nomActivite)
    {
        $this->nomActivite = $nomActivite;

        return $this;
    }

    /**
     * Get nomActivite
     *
     * @return string
     */
    public function getNomActivite()
    {
        return $this->nomActivite;
    }
}

