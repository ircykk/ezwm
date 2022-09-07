<?php

namespace Ircykk\Ezwm\Auth;

class changePasswordParams
{
    /**
     * @var loginParams
     */
    protected $credentials = null;

    /**
     * @var string
     */
    protected $oldPassword = null;

    /**
     * @var string
     */
    protected $newPassword = null;

    /**
     * @var string
     */
    protected $newPasswordRepeat = null;

    /**
     * @param loginParams $credentials
     * @param string      $oldPassword
     * @param string      $newPassword
     * @param string      $newPasswordRepeat
     */
    public function __construct($credentials, $oldPassword, $newPassword, $newPasswordRepeat)
    {
        $this->credentials = $credentials;
        $this->oldPassword = $oldPassword;
        $this->newPassword = $newPassword;
        $this->newPasswordRepeat = $newPasswordRepeat;
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
     * @return \Ircykk\Ezwm\Auth\changePasswordParams
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * @return string
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * @param string $oldPassword
     *
     * @return \Ircykk\Ezwm\Auth\changePasswordParams
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param string $newPassword
     *
     * @return \Ircykk\Ezwm\Auth\changePasswordParams
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewPasswordRepeat()
    {
        return $this->newPasswordRepeat;
    }

    /**
     * @param string $newPasswordRepeat
     *
     * @return \Ircykk\Ezwm\Auth\changePasswordParams
     */
    public function setNewPasswordRepeat($newPasswordRepeat)
    {
        $this->newPasswordRepeat = $newPasswordRepeat;

        return $this;
    }
}
