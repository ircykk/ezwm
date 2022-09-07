<?php

namespace Ircykk\Ezwm\Auth;

class loginRequest
{
    /**
     * @var loginParams
     */
    protected $credentials = null;

    /**
     * @var string
     */
    protected $password = null;

    /**
     * @param loginParams $credentials
     * @param string      $password
     */
    public function __construct($credentials, $password)
    {
        $this->credentials = $credentials;
        $this->password = $password;
    }

    /**
     * @return loginParams
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param loginParams $credentials
     *
     * @return \Ircykk\Ezwm\Auth\loginRequest
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return \Ircykk\Ezwm\Auth\loginRequest
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
