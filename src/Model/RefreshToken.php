<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\RefreshTokenTrait;

/**
 * Class RefreshToken
 * @package App\Model
 * @ORM\MappedSuperclass
 */
abstract class RefreshToken
{

    use EntityTrait;
    use RefreshTokenTrait;

    /**
     * @var boolean
     */
    protected $revoked;
}
