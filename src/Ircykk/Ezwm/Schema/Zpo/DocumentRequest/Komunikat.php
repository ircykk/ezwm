<?php

namespace Ircykk\Ezwm\Schema\Zpo\DocumentRequest;

/**
 * Class representing Komunikat.
 */
class Komunikat
{
    /**
     * @var string
     */
    private $nazwaSys = null;

    /**
     * @var string
     */
    private $wersjaSys = null;

    /**
     * @var string
     */
    private $typ = null;

    /**
     * @var string
     */
    private $etap = null;

    /**
     * @var string
     */
    private $nrZleceniaNfz = null;

    /**
     * @var string
     */
    private $idTechDokumentuNfz = null;

    /**
     * @var string
     */
    private $kodDostepu = null;

    /**
     * @var \Ircykk\Ezwm\Schema\Zpo\DocumentRequest\Komunikat\OkresAType
     */
    private $okres = null;

    /**
     * Gets as nazwaSys.
     *
     * @return string
     */
    public function getNazwaSys()
    {
        return $this->nazwaSys;
    }

    /**
     * Sets a new nazwaSys.
     *
     * @param string $nazwaSys
     *
     * @return self
     */
    public function setNazwaSys($nazwaSys)
    {
        $this->nazwaSys = $nazwaSys;

        return $this;
    }

    /**
     * Gets as wersjaSys.
     *
     * @return string
     */
    public function getWersjaSys()
    {
        return $this->wersjaSys;
    }

    /**
     * Sets a new wersjaSys.
     *
     * @param string $wersjaSys
     *
     * @return self
     */
    public function setWersjaSys($wersjaSys)
    {
        $this->wersjaSys = $wersjaSys;

        return $this;
    }

    /**
     * Gets as typ.
     *
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets a new typ.
     *
     * @param string $typ
     *
     * @return self
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Gets as etap.
     *
     * @return string
     */
    public function getEtap()
    {
        return $this->etap;
    }

    /**
     * Sets a new etap.
     *
     * @param string $etap
     *
     * @return self
     */
    public function setEtap($etap)
    {
        $this->etap = $etap;

        return $this;
    }

    /**
     * Gets as nrZleceniaNfz.
     *
     * @return string
     */
    public function getNrZleceniaNfz()
    {
        return $this->nrZleceniaNfz;
    }

    /**
     * Sets a new nrZleceniaNfz.
     *
     * @param string $nrZleceniaNfz
     *
     * @return self
     */
    public function setNrZleceniaNfz($nrZleceniaNfz)
    {
        $this->nrZleceniaNfz = $nrZleceniaNfz;

        return $this;
    }

    /**
     * Gets as idTechDokumentuNfz.
     *
     * @return string
     */
    public function getIdTechDokumentuNfz()
    {
        return $this->idTechDokumentuNfz;
    }

    /**
     * Sets a new idTechDokumentuNfz.
     *
     * @param string $idTechDokumentuNfz
     *
     * @return self
     */
    public function setIdTechDokumentuNfz($idTechDokumentuNfz)
    {
        $this->idTechDokumentuNfz = $idTechDokumentuNfz;

        return $this;
    }

    /**
     * Gets as kodDostepu.
     *
     * @return string
     */
    public function getKodDostepu()
    {
        return $this->kodDostepu;
    }

    /**
     * Sets a new kodDostepu.
     *
     * @param string $kodDostepu
     *
     * @return self
     */
    public function setKodDostepu($kodDostepu)
    {
        $this->kodDostepu = $kodDostepu;

        return $this;
    }

    /**
     * Gets as okres.
     *
     * @return \Ircykk\Ezwm\Schema\Zpo\DocumentRequest\Komunikat\OkresAType
     */
    public function getOkres()
    {
        return $this->okres;
    }

    /**
     * Sets a new okres.
     *
     * @param \Ircykk\Ezwm\Schema\Zpo\DocumentRequest\Komunikat\OkresAType $okres
     *
     * @return self
     */
    public function setOkres(Komunikat\OkresAType $okres)
    {
        $this->okres = $okres;

        return $this;
    }
}
