<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_comnt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contenu_comnt;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="commentaires")
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity=publication::class, inversedBy="commentaires")
     */
    private $publication;

    /**
     * @ORM\ManyToOne(targetEntity=administration::class, inversedBy="commentaires")
     */
    private $admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateComnt(): ?\DateTimeInterface
    {
        return $this->date_comnt;
    }

    public function setDateComnt(?\DateTimeInterface $date_comnt): self
    {
        $this->date_comnt = $date_comnt;

        return $this;
    }

    public function getContenuComnt(): ?string
    {
        return $this->contenu_comnt;
    }

    public function setContenuComnt(?string $contenu_comnt): self
    {
        $this->contenu_comnt = $contenu_comnt;

        return $this;
    }

    public function getUtilisateur(): ?utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getPublication(): ?publication
    {
        return $this->publication;
    }

    public function setPublication(?publication $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getAdmin(): ?administration
    {
        return $this->admin;
    }

    public function setAdmin(?administration $admin): self
    {
        $this->admin = $admin;

        return $this;
    }
}
