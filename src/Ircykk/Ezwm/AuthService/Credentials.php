<?php

namespace Ircykk\Ezwm\AuthService;

class Credentials
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $operatorId;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $type;

    public function __construct(string $login, string $password, string $operatorId, string $domain, string $type)
    {
        $this->login = $login;
        $this->password = $password;
        $this->operatorId = $operatorId;
        $this->domain = $domain;
        $this->type = $type;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): Credentials
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): Credentials
    {
        $this->password = $password;

        return $this;
    }

    public function getOperatorId(): string
    {
        return $this->operatorId;
    }

    public function setOperatorId(string $operatorId): Credentials
    {
        $this->operatorId = $operatorId;

        return $this;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): Credentials
    {
        $this->domain = $domain;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Credentials
    {
        $this->type = $type;

        return $this;
    }
}
