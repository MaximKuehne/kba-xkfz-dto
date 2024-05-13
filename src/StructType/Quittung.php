<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Quittung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Quittung extends AbstractStructBase
{
    /**
     * The Zeitstempel
     */
    public ?string $Zeitstempel = null;

    /**
     * The LoginToken
     */
    public ?string $LoginToken = null;

    /**
     * The Nachrichtenkopf
     */
    public ?\THAG\XKfz\StructType\Nachrichtenkopf $Nachrichtenkopf = null;

    /**
     * The Fehlertyp
     */
    public ?string $Fehlertyp = null;

    /**
     * The Fehlertext
     */
    public ?string $Fehlertext = null;

    /**
     * The ListeBedingung
     */
    public ?\THAG\XKfz\StructType\ListeBedingung $ListeBedingung = null;

    /**
     * Constructor method for Quittung
     *
     * @uses Quittung::setZeitstempel()
     * @uses Quittung::setLoginToken()
     * @uses Quittung::setNachrichtenkopf()
     * @uses Quittung::setFehlertyp()
     * @uses Quittung::setFehlertext()
     * @uses Quittung::setListeBedingung()
     */
    public function __construct(?string $zeitstempel = null, ?string $loginToken = null, ?\THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf = null, ?string $fehlertyp = null, ?string $fehlertext = null, ?\THAG\XKfz\StructType\ListeBedingung $listeBedingung = null)
    {
        $this
            ->setZeitstempel($zeitstempel)
            ->setLoginToken($loginToken)
            ->setNachrichtenkopf($nachrichtenkopf)
            ->setFehlertyp($fehlertyp)
            ->setFehlertext($fehlertext)
            ->setListeBedingung($listeBedingung);
    }

    /**
     * Get Zeitstempel value
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }

    /**
     * Set Zeitstempel value
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;

        return $this;
    }

    /**
     * Get LoginToken value
     */
    public function getLoginToken(): ?string
    {
        return $this->LoginToken;
    }

    /**
     * Set LoginToken value
     */
    public function setLoginToken(?string $loginToken = null): self
    {
        $this->LoginToken = $loginToken;

        return $this;
    }

    /**
     * Get Nachrichtenkopf value
     */
    public function getNachrichtenkopf(): ?\THAG\XKfz\StructType\Nachrichtenkopf
    {
        return $this->Nachrichtenkopf;
    }

    /**
     * Set Nachrichtenkopf value
     */
    public function setNachrichtenkopf(?\THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf = null): self
    {
        $this->Nachrichtenkopf = $nachrichtenkopf;

        return $this;
    }

    /**
     * Get Fehlertyp value
     */
    public function getFehlertyp(): ?string
    {
        return $this->Fehlertyp;
    }

    /**
     * Set Fehlertyp value
     */
    public function setFehlertyp(?string $fehlertyp = null): self
    {
        $this->Fehlertyp = $fehlertyp;

        return $this;
    }

    /**
     * Get Fehlertext value
     */
    public function getFehlertext(): ?string
    {
        return $this->Fehlertext;
    }

    /**
     * Set Fehlertext value
     */
    public function setFehlertext(?string $fehlertext = null): self
    {
        $this->Fehlertext = $fehlertext;

        return $this;
    }

    /**
     * Get ListeBedingung value
     */
    public function getListeBedingung(): ?\THAG\XKfz\StructType\ListeBedingung
    {
        return $this->ListeBedingung;
    }

    /**
     * Set ListeBedingung value
     */
    public function setListeBedingung(?\THAG\XKfz\StructType\ListeBedingung $listeBedingung = null): self
    {
        $this->ListeBedingung = $listeBedingung;

        return $this;
    }
}
