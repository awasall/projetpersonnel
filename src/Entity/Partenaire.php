<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation\UploadableField;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ApiResource()
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="App\Repository\PartenaireRepository")
 * @UniqueEntity(fields={"email"}, message="cet email existe déja.")
 * @UniqueEntity(fields={"ninea"}, message="Tce ninea existe deja.")
 * @UniqueEntity(fields={"raisonsociale"}, message="existe deja.")
 * @UniqueEntity(fields={"telephone"}, message="ce numéro de téléphone existe déja.")
 */
class Partenaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le ninea ne doit pas être vide")
     * @Assert\Length(min="2", minMessage="le ninea  doit contenir un minimum de {{ limit }} caractères", max="255", maxMessage="le ninea doit contenir un maximum de {{ limit }} caractères")
     */
 
     
    private $ninea;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La raison sociale ne doit pas être vide")
     * @Assert\Length(min="2", minMessage="la raison sociale doit contenir un minimum de {{ limit }} caractères", max="255", maxMessage="la raison sociale doit contenir un maximum de {{ limit }} caractères")

     */
    private $raisonsociale;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La raison sociale ne doit pas être vide")

     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
    * @Assert\NotBlank(message="le numéro de téléphone ne doit pas être vide")

     */
    private $telephone;
     /**
      * @var string
      */
    private $imageName;

    /** 
     * @var File
     * @Vich\UploadableField(mapping="products_image", fileNameProperty="imageName")
     */
    private $imageFile;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le prenom ne doit pas être vide")

     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le nom ne doit pas être vide")

     */
    private $nom;

    public function getId(): ?int
    {
        return $this->id;
    }
/** 
    * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
    */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

    }
    public function getNinea(): ?string
    {
        return $this->ninea;
    }

    public function setNinea(string $ninea): self
    {
        $this->ninea = $ninea;

        return $this;
    }

    public function getRaisonsociale(): ?string
    {
        return $this->raisonsociale;
    }

    public function setRaisonsociale(string $raisonsociale): self
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }
    public function setImageName(string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
    

   
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of imageName
     *
     * @return  string
     */ 
    public function getImageName()
    {
        return $this->imageName;
    }

}
