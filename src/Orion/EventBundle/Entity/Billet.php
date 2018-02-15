<?php

namespace Orion\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billet
 *
 * @ORM\Table(name="orion_event_billet")
 * @ORM\Entity
 */
class Billet {

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
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true, options={"default":false})
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre", type="integer")
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="attente", type="integer")
     */
    private $attente;

    /**
     * @ORM\ManyToOne(targetEntity="Orion\EventBundle\Entity\Evenement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $evenement;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    function getId() {
        return $this->id;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getType() {
        return $this->type;
    }

    function getPrix() {
        return $this->prix;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getAttente() {
        return $this->attente;
    }

    function getDateCreation() {
        return $this->dateCreation;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setAttente($attente) {
        $this->attente = $attente;
    }

    function setDateCreation(\DateTime $dateCreation) {
        $this->dateCreation = $dateCreation;
    }
    function getEvenement() {
        return $this->evenement;
    }

    function setEvenement($evenement) {
        $this->evenement = $evenement;
    }

    function __construct() {
        $this->dateCreation = new \DateTime('NOW');      
        //$this->attente= $this->nombre;
    }

}
