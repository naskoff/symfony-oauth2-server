<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClientRepository;

/**
 * @ORM\Table(name="oauth2_clients")
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client extends \App\Model\Client
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
