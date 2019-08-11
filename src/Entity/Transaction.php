<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomEnv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomEnv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typePieceEnv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numPieceEnv;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Compte")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CompteEnv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomBenef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomBenef;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typePieceBenef;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numPieceBenef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneBenef;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEnv;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateRetrait;

    /**
     * @ORM\Column(type="bigint")
     */
    private $montant;

    /**
     * @ORM\Column(type="bigint")
     */
    private $commisionEnv;

    /**
     * @ORM\Column(type="bigint")
     */
    private $commissionRetr;

    /**
     * @ORM\Column(type="bigint")
     */
    private $commissionPropre;

    /**
     * @ORM\Column(type="bigint")
     */
    private $frais;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userEnv;

    /**
     * @ORM\Column(type="bigint")
     */
    private $commisionEtat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getPrenomEnv(): ?string
    {
        return $this->prenomEnv;
    }

    public function setPrenomEnv(string $prenomEnv): self
    {
        $this->prenomEnv = $prenomEnv;

        return $this;
    }

    public function getNomEnv(): ?string
    {
        return $this->nomEnv;
    }

    public function setNomEnv(string $nomEnv): self
    {
        $this->nomEnv = $nomEnv;

        return $this;
    }

    public function getTelephoneEn(): ?string
    {
        return $this->telephoneEn;
    }

    public function setTelephoneEn(string $telephoneEn): self
    {
        $this->telephoneEn = $telephoneEn;

        return $this;
    }

    public function getTypePieceEnv(): ?string
    {
        return $this->typePieceEnv;
    }

    public function setTypePieceEnv(string $typePieceEnv): self
    {
        $this->typePieceEnv = $typePieceEnv;

        return $this;
    }

    public function getNumPieceEnv(): ?string
    {
        return $this->numPieceEnv;
    }

    public function setNumPieceEnv(string $numPieceEnv): self
    {
        $this->numPieceEnv = $numPieceEnv;

        return $this;
    }

    public function getCompteEnv(): ?Compte
    {
        return $this->CompteEnv;
    }

    public function setCompteEnv(?Compte $CompteEnv): self
    {
        $this->CompteEnv = $CompteEnv;

        return $this;
    }

    public function getPrenomBenef(): ?string
    {
        return $this->prenomBenef;
    }

    public function setPrenomBenef(string $prenomBenef): self
    {
        $this->prenomBenef = $prenomBenef;

        return $this;
    }

    public function getNomBenef(): ?string
    {
        return $this->nomBenef;
    }

    public function setNomBenef(string $nomBenef): self
    {
        $this->nomBenef = $nomBenef;

        return $this;
    }

    public function getTypePieceBenef(): ?string
    {
        return $this->typePieceBenef;
    }

    public function setTypePieceBenef(?string $typePieceBenef): self
    {
        $this->typePieceBenef = $typePieceBenef;

        return $this;
    }

    public function getNumPieceBenef(): ?string
    {
        return $this->numPieceBenef;
    }

    public function setNumPieceBenef(?string $numPieceBenef): self
    {
        $this->numPieceBenef = $numPieceBenef;

        return $this;
    }

    public function getTelephoneBenef(): ?string
    {
        return $this->telephoneBenef;
    }

    public function setTelephoneBenef(string $telephoneBenef): self
    {
        $this->telephoneBenef = $telephoneBenef;

        return $this;
    }

    public function getDateEnv(): ?\DateTimeInterface
    {
        return $this->dateEnv;
    }

    public function setDateEnv(\DateTimeInterface $dateEnv): self
    {
        $this->dateEnv = $dateEnv;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(?\DateTimeInterface $dateRetrait): self
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getCommisionEnv(): ?int
    {
        return $this->commisionEnv;
    }

    public function setCommisionEnv(int $commisionEnv): self
    {
        $this->commisionEnv = $commisionEnv;

        return $this;
    }

    public function getCommissionRetr(): ?int
    {
        return $this->commissionRetr;
    }

    public function setCommissionRetr(int $commissionRetr): self
    {
        $this->commissionRetr = $commissionRetr;

        return $this;
    }

    public function getCommissionPropre(): ?int
    {
        return $this->commissionPropre;
    }

    public function setCommissionPropre(int $commissionPropre): self
    {
        $this->commissionPropre = $commissionPropre;

        return $this;
    }

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getUserEnv(): ?User
    {
        return $this->userEnv;
    }

    public function setUserEnv(?User $userEnv): self
    {
        $this->userEnv = $userEnv;

        return $this;
    }

    public function getCommisionEtat(): ?int
    {
        return $this->commisionEtat;
    }

    public function setCommisionEtat(int $commisionEtat): self
    {
        $this->commisionEtat = $commisionEtat;

        return $this;
    }

    

   

    

   
}
