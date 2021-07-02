<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AuthCodeRepository;

/**
 * @ORM\Table(name="oauth2_auth_codes")
 * @ORM\Entity(repositoryClass=AuthCodeRepository::class)
 */
class AuthCode extends \App\Model\AuthCode
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
