<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\AuthCodeTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;

/**
 * Class AuthCode
 * @package App\Model
 * @ORM\MappedSuperclass
 */
abstract class AuthCode
{

    use AuthCodeTrait;
    use EntityTrait;
    use TokenEntityTrait;

    /**
     * @var boolean
     */
    protected $revoked;
}
