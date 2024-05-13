<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Quittung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Quittung extends AbstractStructBase
{
    /**
     * The Zeitstempel
     * @var string|null
     */
    public ?string $Zeitstempel = null;
    /**
     * The LoginToken
     * @var string|null
     */
    public ?string $LoginToken = null;
    /**
     * The Nachrichtenkopf
     * @var \THAG\XKfz\StructType\Nachrichtenkopf|null
     */
    public ?\THAG\XKfz\StructType\Nachrichtenkopf $Nachrichtenkopf = null;
    /**
     * The Fehlertyp
     * @var string|null
     */
    public ?string $Fehlertyp = null;
    /**
     * The Fehlertext
     * @var string|null
     */
    public ?string $Fehlertext = null;
    /**
     * The ListeBedingung
     * @var \THAG\XKfz\StructType\ListeBedingung|null
     */
    public ?\THAG\XKfz\StructType\ListeBedingung $ListeBedingung = null;
    /**
     * Constructor method for Quittung
     * @uses Quittung::setZeitstempel()
     * @uses Quittung::setLoginToken()
     * @uses Quittung::setNachrichtenkopf()
     * @uses Quittung::setFehlertyp()
     * @uses Quittung::setFehlertext()
     * @uses Quittung::setListeBedingung()
     * @param string $zeitstempel
     * @param string $loginToken
     * @param \THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf
     * @param string $fehlertyp
     * @param string $fehlertext
     * @param \THAG\XKfz\StructType\ListeBedingung $listeBedingung
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
     * @return string|null
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }
    /**
     * Set Zeitstempel value
     * @param string $zeitstempel
     * @return \THAG\XKfz\StructType\Quittung
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;
        
        return $this;
    }
    /**
     * Get LoginToken value
     * @return string|null
     */
    public function getLoginToken(): ?string
    {
        return $this->LoginToken;
    }
    /**
     * Set LoginToken value
     * @param string $loginToken
     * @return \THAG\XKfz\StructType\Quittung
     */
    public function setLoginToken(?string $loginToken = null): self
    {
        $this->LoginToken = $loginToken;
        
        return $this;
    }
    /**
     * Get Nachrichtenkopf value
     * @return \THAG\XKfz\StructType\Nachrichtenkopf|null
     */
    public function getNachrichtenkopf(): ?\THAG\XKfz\StructType\Nachrichtenkopf
    {
        return $this->Nachrichtenkopf;
    }
    /**
     * Set Nachrichtenkopf value
     * @param \THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf
     * @return \THAG\XKfz\StructType\Quittung
     */
    public function setNachrichtenkopf(?\THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf = null): self
    {
        $this->Nachrichtenkopf = $nachrichtenkopf;
        
        return $this;
    }
    /**
     * Get Fehlertyp value
     * @return string|null
     */
    public function getFehlertyp(): ?string
    {
        return $this->Fehlertyp;
    }
    /**
     * Set Fehlertyp value
     * @param string $fehlertyp
     * @return \THAG\XKfz\StructType\Quittung
     */
    public function setFehlertyp(?string $fehlertyp = null): self
    {
        $this->Fehlertyp = $fehlertyp;
        
        return $this;
    }
    /**
     * Get Fehlertext value
     * @return string|null
     */
    public function getFehlertext(): ?string
    {
        return $this->Fehlertext;
    }
    /**
     * Set Fehlertext value
     * @param string $fehlertext
     * @return \THAG\XKfz\StructType\Quittung
     */
    public function setFehlertext(?string $fehlertext = null): self
    {
        $this->Fehlertext = $fehlertext;
        
        return $this;
    }
    /**
     * Get ListeBedingung value
     * @return \THAG\XKfz\StructType\ListeBedingung|null
     */
    public function getListeBedingung(): ?\THAG\XKfz\StructType\ListeBedingung
    {
        return $this->ListeBedingung;
    }
    /**
     * Set ListeBedingung value
     * @param \THAG\XKfz\StructType\ListeBedingung $listeBedingung
     * @return \THAG\XKfz\StructType\Quittung
     */
    public function setListeBedingung(?\THAG\XKfz\StructType\ListeBedingung $listeBedingung = null): self
    {
        $this->ListeBedingung = $listeBedingung;
        
        return $this;
    }
}
