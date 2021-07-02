<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\AccessTokenTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;

/**
 * Class AccessToken
 * @package App\Model
 * @ORM\MappedSuperclass()
 */
abstract class AccessToken
{

    use AccessTokenTrait;
    use EntityTrait;
    use TokenEntityTrait;

    /**
     * @var boolean
     */
    protected $revoked;
}
