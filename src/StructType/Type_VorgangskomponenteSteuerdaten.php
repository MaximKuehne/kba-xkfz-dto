<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteSteuerdaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteSteuerdaten extends AbstractStructBase
{
    /**
     * The steuerzahlweise
     */
    public ?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null;

    /**
     * The einheitlicherFaelligkeitstag
     */
    public ?string $einheitlicherFaelligkeitstag = null;

    /**
     * The steuerbefreiung
     */
    public ?\THAG\XKfz\StructType\Type_Steuerbefreiung $steuerbefreiung = null;

    /**
     * The anhaengerZuschlag
     */
    public ?string $anhaengerZuschlag = null;

    /**
     * The grosskundenID
     */
    public ?string $grosskundenID = null;

    /**
     * The mitteilungsIDKraftSt
     */
    public ?int $mitteilungsIDKraftSt = null;

    /**
     * Constructor method for Type.VorgangskomponenteSteuerdaten
     *
     * @uses Type_VorgangskomponenteSteuerdaten::setSteuerzahlweise()
     * @uses Type_VorgangskomponenteSteuerdaten::setEinheitlicherFaelligkeitstag()
     * @uses Type_VorgangskomponenteSteuerdaten::setSteuerbefreiung()
     * @uses Type_VorgangskomponenteSteuerdaten::setAnhaengerZuschlag()
     * @uses Type_VorgangskomponenteSteuerdaten::setGrosskundenID()
     * @uses Type_VorgangskomponenteSteuerdaten::setMitteilungsIDKraftSt()
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
     */
    public function getSteuerzahlweise(): ?\THAG\XKfz\StructType\Code_Steuerzahlweise
    {
        return $this->steuerzahlweise;
    }

    /**
     * Set steuerzahlweise value
     */
    public function setSteuerzahlweise(?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null): self
    {
        $this->steuerzahlweise = $steuerzahlweise;

        return $this;
    }

    /**
     * Get einheitlicherFaelligkeitstag value
     */
    public function getEinheitlicherFaelligkeitstag(): ?string
    {
        return $this->einheitlicherFaelligkeitstag;
    }

    /**
     * Set einheitlicherFaelligkeitstag value
     */
    public function setEinheitlicherFaelligkeitstag(?string $einheitlicherFaelligkeitstag = null): self
    {
        $this->einheitlicherFaelligkeitstag = $einheitlicherFaelligkeitstag;

        return $this;
    }

    /**
     * Get steuerbefreiung value
     */
    public function getSteuerbefreiung(): ?\THAG\XKfz\StructType\Type_Steuerbefreiung
    {
        return $this->steuerbefreiung;
    }

    /**
     * Set steuerbefreiung value
     */
    public function setSteuerbefreiung(?\THAG\XKfz\StructType\Type_Steuerbefreiung $steuerbefreiung = null): self
    {
        $this->steuerbefreiung = $steuerbefreiung;

        return $this;
    }

    /**
     * Get anhaengerZuschlag value
     */
    public function getAnhaengerZuschlag(): ?string
    {
        return $this->anhaengerZuschlag;
    }

    /**
     * Set anhaengerZuschlag value
     */
    public function setAnhaengerZuschlag(?string $anhaengerZuschlag = null): self
    {
        $this->anhaengerZuschlag = $anhaengerZuschlag;

        return $this;
    }

    /**
     * Get grosskundenID value
     */
    public function getGrosskundenID(): ?string
    {
        return $this->grosskundenID;
    }

    /**
     * Set grosskundenID value
     */
    public function setGrosskundenID(?string $grosskundenID = null): self
    {
        $this->grosskundenID = $grosskundenID;

        return $this;
    }

    /**
     * Get mitteilungsIDKraftSt value
     */
    public function getMitteilungsIDKraftSt(): ?int
    {
        return $this->mitteilungsIDKraftSt;
    }

    /**
     * Set mitteilungsIDKraftSt value
     */
    public function setMitteilungsIDKraftSt(?int $mitteilungsIDKraftSt = null): self
    {
        $this->mitteilungsIDKraftSt = $mitteilungsIDKraftSt;

        return $this;
    }
}
