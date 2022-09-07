<?php

namespace Ircykk\Ezwm\Schema\Zpo\DocumentRequest\Komunikat;

/**
 * Class representing OkresAType.
 */
class OkresAType
{
    /**
     * @var string
     */
    private $miesOd = null;

    /**
     * @var int
     */
    private $lbMies = null;

    /**
     * Gets as miesOd.
     *
     * @return string
     */
    public function getMiesOd()
    {
        return $this->miesOd;
    }

    /**
     * Sets a new miesOd.
     *
     * @param string $miesOd
     *
     * @return self
     */
    public function setMiesOd($miesOd)
    {
        $this->miesOd = $miesOd;

        return $this;
    }

    /**
     * Gets as lbMies.
     *
     * @return int
     */
    public function getLbMies()
    {
        return $this->lbMies;
    }

    /**
     * Sets a new lbMies.
     *
     * @param int $lbMies
     *
     * @return self
     */
    public function setLbMies($lbMies)
    {
        $this->lbMies = $lbMies;

        return $this;
    }
}
