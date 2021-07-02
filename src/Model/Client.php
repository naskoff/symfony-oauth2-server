<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
use League\OAuth2\Server\Entities\Traits\ClientTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;

/**
 * Class Client
 * @package App\Model
 * @ORM\MappedSuperclass
 */
abstract class Client
{

    use ClientTrait;
    use EntityTrait;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var array
     */
    protected $grants;

    /**
     * @var array
     */
    protected $scopes;

    /**
     * @var array
     */
    protected $redirectUris;

    /**
     * @var boolean
     */
    protected $active;

    /**
     * @var boolean
     */
    protected $allowPlainTextPkce;
}
