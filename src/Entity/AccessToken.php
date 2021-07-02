<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AccessTokenRepository;

/**
 * @ORM\Table(name="oauth2_access_tokens")
 * @ORM\Entity(repositoryClass=AccessTokenRepository::class)
 */
class AccessToken extends \App\Model\AccessToken
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
