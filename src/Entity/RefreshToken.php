<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\RefreshTokenRepository;

/**
 * @ORM\Table(name="oauth2_refresh_tokens")
 * @ORM\Entity(repositoryClass=RefreshTokenRepository::class)
 */
class RefreshToken extends \App\Model\RefreshToken
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
