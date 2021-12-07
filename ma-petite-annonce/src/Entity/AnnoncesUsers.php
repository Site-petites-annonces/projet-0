<?php

namespace App\Entity;

use App\Repository\AnnoncesUsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnoncesUsersRepository::class)
 */
class AnnoncesUsers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Annonces_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $users_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnnoncesId(): ?int
    {
        return $this->Annonces_id;
    }

    public function setAnnoncesId(int $Annonces_id): self
    {
        $this->Annonces_id = $Annonces_id;

        return $this;
    }

    public function getUsersId(): ?int
    {
        return $this->users_id;
    }

    public function setUsersId(int $users_id): self
    {
        $this->users_id = $users_id;

        return $this;
    }
}
