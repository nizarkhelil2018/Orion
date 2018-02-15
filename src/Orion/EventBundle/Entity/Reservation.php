<?php

namespace Orion\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="orion_event_reservation")
 * @ORM\Entity
 */
class Reservation {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User", referencedColumnName="id")
     * })
     */
    private $utilisateur;

    /**
     * @var \Billet
     *
     * @ORM\ManyToOne(targetEntity="Billet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Billet", referencedColumnName="id")
     * })
     */
    private $billet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;
    
    public function getBillet() {
        return $this->billet;
    }

    public function setBillet(\Orion\EventBundle\Entity\Billet $billet) {
        $this->billet = $billet;
    }

        function getId() {
        return $this->id;
    }

    function getDateReservation() {
        return $this->dateReservation;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateReservation(\DateTime $dateReservation) {
        $this->dateReservation = $dateReservation;
    }

    function getUtilisateur() {
        return $this->utilisateur;
    }

   

    function setUtilisateur(\AppBundle\Entity\User $utilisateur) {
        $this->utilisateur = $utilisateur;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number) {
        $this->number = $number;
    }


}
