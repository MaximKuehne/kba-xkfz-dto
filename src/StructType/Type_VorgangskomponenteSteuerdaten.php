<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteSteuerdaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteSteuerdaten extends AbstractStructBase
{
    /**
     * The steuerzahlweise
     * @var \THAG\XKfz\StructType\Code_Steuerzahlweise|null
     */
    public ?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null;
    /**
     * The einheitlicherFaelligkeitstag
     * @var string|null
     */
    public ?string $einheitlicherFaelligkeitstag = null;
    /**
     * The steuerbefreiung
     * @var \THAG\XKfz\StructType\Type_Steuerbefreiung|null
     */
    public ?\THAG\XKfz\StructType\Type_Steuerbefreiung $steuerbefreiung = null;
    /**
     * The anhaengerZuschlag
     * @var string|null
     */
    public ?string $anhaengerZuschlag = null;
    /**
     * The grosskundenID
     * @var string|null
     */
    public ?string $grosskundenID = null;
    /**
     * The mitteilungsIDKraftSt
     * @var int|null
     */
    public ?int $mitteilungsIDKraftSt = null;
    /**
     * Constructor method for Type.VorgangskomponenteSteuerdaten
     * @uses Type_VorgangskomponenteSteuerdaten::setSteuerzahlweise()
     * @uses Type_VorgangskomponenteSteuerdaten::setEinheitlicherFaelligkeitstag()
     * @uses Type_VorgangskomponenteSteuerdaten::setSteuerbefreiung()
     * @uses Type_VorgangskomponenteSteuerdaten::setAnhaengerZuschlag()
     * @uses Type_VorgangskomponenteSteuerdaten::setGrosskundenID()
     * @uses Type_VorgangskomponenteSteuerdaten::setMitteilungsIDKraftSt()
     * @param \THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise
     * @param string $einheitlicherFaelligkeitstag
     * @param \THAG\XKfz\StructType\Type_Steuerbefreiung $steuerbefreiung
     * @param string $anhaengerZuschlag
     * @param string $grosskundenID
     * @param int $mitteilungsIDKraftSt
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null, ?string $einheitlicherFaelligkeitstag = null, ?\THAG\XKfz\StructType\Type_Steuerbefreiung $steuerbefreiung = null, ?string $anhaengerZuschlag = null, ?string $grosskundenID = null, ?int $mitteilungsIDKraftSt = null)
    {
        $this
            ->setSteuerzahlweise($steuerzahlweise)
            ->setEinheitlicherFaelligkeitstag($einheitlicherFaelligkeitstag)
            ->setSteuerbefreiung($steuerbefreiung)
            ->setAnhaengerZuschlag($anhaengerZuschlag)
            ->setGrosskundenID($grosskundenID)
            ->setMitteilungsIDKraftSt($mitteilungsIDKraftSt);
    }
    /**
     * Get steuerzahlweise value
     * @return \THAG\XKfz\StructType\Code_Steuerzahlweise|null
     */
    public function getSteuerzahlweise(): ?\THAG\XKfz\StructType\Code_Steuerzahlweise
    {
        return $this->steuerzahlweise;
    }
    /**
     * Set steuerzahlweise value
     * @param \THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten
     */
    public function setSteuerzahlweise(?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null): self
    {
        $this->steuerzahlweise = $steuerzahlweise;
        
        return $this;
    }
    /**
     * Get einheitlicherFaelligkeitstag value
     * @return string|null
     */
    public function getEinheitlicherFaelligkeitstag(): ?string
    {
        return $this->einheitlicherFaelligkeitstag;
    }
    /**
     * Set einheitlicherFaelligkeitstag value
     * @param string $einheitlicherFaelligkeitstag
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten
     */
    public function setEinheitlicherFaelligkeitstag(?string $einheitlicherFaelligkeitstag = null): self
    {
        $this->einheitlicherFaelligkeitstag = $einheitlicherFaelligkeitstag;
        
        return $this;
    }
    /**
     * Get steuerbefreiung value
     * @return \THAG\XKfz\StructType\Type_Steuerbefreiung|null
     */
    public function getSteuerbefreiung(): ?\THAG\XKfz\StructType\Type_Steuerbefreiung
    {
        return $this->steuerbefreiung;
    }
    /**
     * Set steuerbefreiung value
     * @param \THAG\XKfz\StructType\Type_Steuerbefreiung $steuerbefreiung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten
     */
    public function setSteuerbefreiung(?\THAG\XKfz\StructType\Type_Steuerbefreiung $steuerbefreiung = null): self
    {
        $this->steuerbefreiung = $steuerbefreiung;
        
        return $this;
    }
    /**
     * Get anhaengerZuschlag value
     * @return string|null
     */
    public function getAnhaengerZuschlag(): ?string
    {
        return $this->anhaengerZuschlag;
    }
    /**
     * Set anhaengerZuschlag value
     * @param string $anhaengerZuschlag
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten
     */
    public function setAnhaengerZuschlag(?string $anhaengerZuschlag = null): self
    {
        $this->anhaengerZuschlag = $anhaengerZuschlag;
        
        return $this;
    }
    /**
     * Get grosskundenID value
     * @return string|null
     */
    public function getGrosskundenID(): ?string
    {
        return $this->grosskundenID;
    }
    /**
     * Set grosskundenID value
     * @param string $grosskundenID
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten
     */
    public function setGrosskundenID(?string $grosskundenID = null): self
    {
        $this->grosskundenID = $grosskundenID;
        
        return $this;
    }
    /**
     * Get mitteilungsIDKraftSt value
     * @return int|null
     */
    public function getMitteilungsIDKraftSt(): ?int
    {
        return $this->mitteilungsIDKraftSt;
    }
    /**
     * Set mitteilungsIDKraftSt value
     * @param int $mitteilungsIDKraftSt
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten
     */
    public function setMitteilungsIDKraftSt(?int $mitteilungsIDKraftSt = null): self
    {
        $this->mitteilungsIDKraftSt = $mitteilungsIDKraftSt;
        
        return $this;
    }
}
