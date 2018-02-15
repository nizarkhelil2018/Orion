<?php

namespace Orion\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Orion\EventBundle\Entity\Evenement;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenement
 *
 * @ORM\Table(name="orion_event_evenement")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Evenement {

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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime")
     */
    private $horaireDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime")
     */
    private $HoraireFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="fuseauHoraire", type="integer")
     */
    private $fuseauHoraire;

    /**
     * @var \User
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $organisateur;

    /**
     *
     * @var Theme
     * @ORM\ManyToOne(targetEntity="Orion\EventBundle\Entity\Theme")
     */
    private $theme;

    /**
     *
     * @var Type
     * @ORM\ManyToOne(targetEntity="Orion\EventBundle\Entity\Type")
     */
    private $type;
    //----------------------------------Image----------------------------------
    
    /**
     * @ORM\Column(type="string",length=255, nullable=true) 
     */
    private $path;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPDATE", type="datetime",nullable=true)
     */
    private $updateAt;

    /**
     * @Assert\File(
     *      maxSize="5242880",
     *      mimeTypes = {
     *          "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *            }
     * )
     */
    public $file;

    //----------------------------------getter & setters----------------------------------
    
    public function getId() {
        return $this->id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function getPays() {
        return $this->pays;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getCodePostal() {
        return $this->codePostal;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getHoraireDebut() {
        return $this->horaireDebut;
    }

    public function getHoraireFin() {
        return $this->HoraireFin;
    }

    public function getFuseauHoraire() {
        return $this->fuseauHoraire;
    }

    public function getOrganisateur() {
        return $this->organisateur;
    }

    public function getTheme() {
        return $this->theme;
    }

    public function getType() {
        return $this->type;
    }

    public function getPath() {
        return $this->path;
    }

    public function getUpdateAt() {
        return $this->updateAt;
    }

    public function getFile() {
        return $this->file;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

    public function setDateCreation(\DateTime $dateCreation) {
        $this->dateCreation = $dateCreation;
    }

    public function setPays($pays) {
        $this->pays = $pays;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setHoraireDebut(\DateTime $horaireDebut) {
        $this->horaireDebut = $horaireDebut;
    }

    public function setHoraireFin(\DateTime $HoraireFin) {
        $this->HoraireFin = $HoraireFin;
    }

    public function setFuseauHoraire($fuseauHoraire) {
        $this->fuseauHoraire = $fuseauHoraire;
    }

    public function setOrganisateur($organisateur) {
        $this->organisateur = $organisateur;
    }

    public function setTheme(Theme $theme) {
        $this->theme = $theme;
    }

    public function setType(Type $type) {
        $this->type = $type;
    }

    public function setPath($path) {
        $this->path = $path;
    }

    public function setUpdateAt(\DateTime $updateAt) {
        $this->updateAt = $updateAt;
    }

    public function setFile($file) {
        $this->file = $file;
    }

    //----------------------------------function----------------------------------
    
    public function __construct() {
        $this->dateCreation = new \DateTime('NOW');
        $this->horaireDebut = new \DateTime('NOW');
        $this->HoraireFin = new \DateTime('NOW');
        $this->updateAt = new \DateTime('NOW');
        
    }

    //les fonctions relatives à l'image
    /**
     * @ORM\PostLoad()
     */
    public function postLoad() {
        $this->updateAt = new \DateTime();
    }

    public function getUploadRootDir() {
        return __dir__ . '/../../../../web/uploads';
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getAssetPath() {
        return 'uploads/' . $this->path;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();
        $this->updateAt = new \DateTime();

        if (null !== $this->file) {
            $this->name = $this->file->getClientOriginalName();
            $this->path = sha1(uniqid(mt_rand(), true)) . '.' . $this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null !== $this->file) {
            $this->file->move($this->getUploadRootDir(), $this->path);
            unset($this->file);

            if ($this->oldFile != null)
                unlink($this->tempFile);
        }
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload() {
        $this->tempFile = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if (file_exists($this->tempFile))
            unlink($this->tempFile);
    }
    public function __toString() {
      return $this-> getTitre(); 
    }


}
