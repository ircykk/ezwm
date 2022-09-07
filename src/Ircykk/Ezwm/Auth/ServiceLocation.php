<?php

namespace Ircykk\Ezwm\Auth;

class ServiceLocation
{
    /**
     * @var string
     */
    protected $namespace = null;

    /**
     * @var string
     */
    protected $localname = null;

    /**
     * @var string
     */
    protected $version = null;

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @param string $namespace
     * @param string $localname
     * @param string $version
     */
    public function __construct($namespace, $localname, $version)
    {
        $this->namespace = $namespace;
        $this->localname = $localname;
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     *
     * @return \Ircykk\Ezwm\Auth\ServiceLocation
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocalname()
    {
        return $this->localname;
    }

    /**
     * @param string $localname
     *
     * @return \Ircykk\Ezwm\Auth\ServiceLocation
     */
    public function setLocalname($localname)
    {
        $this->localname = $localname;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return \Ircykk\Ezwm\Auth\ServiceLocation
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return \Ircykk\Ezwm\Auth\ServiceLocation
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
