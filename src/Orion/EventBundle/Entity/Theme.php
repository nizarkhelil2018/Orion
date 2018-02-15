<?php

namespace Orion\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="orion_event_theme")
 * @ORM\Entity
 */
class Theme {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true, options={"default":false})
     */
    private $etat = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModification", type="datetime")
     */
    private $dateModification;

    public function __construct() {
        $this->dateCreation = new \DateTime('NOW');
        $this->dateModification = new \DateTime('NOW');
    }

    function getId() {
        return $this->id;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getDescription() {
        return $this->description;
    }

    function getEtat() {
        return $this->etat;
    }

    function getDateCreation() {
        return $this->dateCreation;
    }

    function getDateModification() {
        return $this->dateModification;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setDateCreation(\DateTime $dateCreation) {
        $this->dateCreation = $dateCreation;
    }

    function setDateModification(\DateTime $dateModification) {
        $this->dateModification = $dateModification;
    }

    public function __toString() {
        return $this->getLibelle();
    }

}
