<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NachrichtInfo StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NachrichtInfo extends AbstractStructBase
{
    /**
     * The kommunikationsschritt
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null;

    /**
     * The nachrichtenid
     */
    public ?string $nachrichtenid = null;

    /**
     * The zeitpunktDerErstellung
     */
    public ?string $zeitpunktDerErstellung = null;

    /**
     * The zeitpunktDerSpeicherung
     */
    public ?string $zeitpunktDerSpeicherung = null;

    /**
     * The referenzAbsender
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null;

    /**
     * The nachrichtenidBezugsnachricht
     */
    public ?string $nachrichtenidBezugsnachricht = null;

    /**
     * The referenz
     */
    public ?\THAG\XKfz\StructType\Type_Referenz $referenz = null;

    /**
     * Constructor method for Type.NachrichtInfo
     *
     * @uses Type_NachrichtInfo::setKommunikationsschritt()
     * @uses Type_NachrichtInfo::setNachrichtenid()
     * @uses Type_NachrichtInfo::setZeitpunktDerErstellung()
     * @uses Type_NachrichtInfo::setZeitpunktDerSpeicherung()
     * @uses Type_NachrichtInfo::setReferenzAbsender()
     * @uses Type_NachrichtInfo::setNachrichtenidBezugsnachricht()
     * @uses Type_NachrichtInfo::setReferenz()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null, ?string $nachrichtenid = null, ?string $zeitpunktDerErstellung = null, ?string $zeitpunktDerSpeicherung = null, ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null, ?string $nachrichtenidBezugsnachricht = null, ?\THAG\XKfz\StructType\Type_Referenz $referenz = null)
    {
        $this
            ->setKommunikationsschritt($kommunikationsschritt)
            ->setNachrichtenid($nachrichtenid)
            ->setZeitpunktDerErstellung($zeitpunktDerErstellung)
            ->setZeitpunktDerSpeicherung($zeitpunktDerSpeicherung)
            ->setReferenzAbsender($referenzAbsender)
            ->setNachrichtenidBezugsnachricht($nachrichtenidBezugsnachricht)
            ->setReferenz($referenz);
    }

    /**
     * Get kommunikationsschritt value
     */
    public function getKommunikationsschritt(): ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA
    {
        return $this->kommunikationsschritt;
    }

    /**
     * Set kommunikationsschritt value
     */
    public function setKommunikationsschritt(?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null): self
    {
        $this->kommunikationsschritt = $kommunikationsschritt;

        return $this;
    }

    /**
     * Get nachrichtenid value
     */
    public function getNachrichtenid(): ?string
    {
        return $this->nachrichtenid;
    }

    /**
     * Set nachrichtenid value
     */
    public function setNachrichtenid(?string $nachrichtenid = null): self
    {
        $this->nachrichtenid = $nachrichtenid;

        return $this;
    }

    /**
     * Get zeitpunktDerErstellung value
     */
    public function getZeitpunktDerErstellung(): ?string
    {
        return $this->zeitpunktDerErstellung;
    }

    /**
     * Set zeitpunktDerErstellung value
     */
    public function setZeitpunktDerErstellung(?string $zeitpunktDerErstellung = null): self
    {
        $this->zeitpunktDerErstellung = $zeitpunktDerErstellung;

        return $this;
    }

    /**
     * Get zeitpunktDerSpeicherung value
     */
    public function getZeitpunktDerSpeicherung(): ?string
    {
        return $this->zeitpunktDerSpeicherung;
    }

    /**
     * Set zeitpunktDerSpeicherung value
     */
    public function setZeitpunktDerSpeicherung(?string $zeitpunktDerSpeicherung = null): self
    {
        $this->zeitpunktDerSpeicherung = $zeitpunktDerSpeicherung;

        return $this;
    }

    /**
     * Get referenzAbsender value
     */
    public function getReferenzAbsender(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzAbsender;
    }

    /**
     * Set referenzAbsender value
     */
    public function setReferenzAbsender(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null): self
    {
        $this->referenzAbsender = $referenzAbsender;

        return $this;
    }

    /**
     * Get nachrichtenidBezugsnachricht value
     */
    public function getNachrichtenidBezugsnachricht(): ?string
    {
        return $this->nachrichtenidBezugsnachricht;
    }

    /**
     * Set nachrichtenidBezugsnachricht value
     */
    public function setNachrichtenidBezugsnachricht(?string $nachrichtenidBezugsnachricht = null): self
    {
        $this->nachrichtenidBezugsnachricht = $nachrichtenidBezugsnachricht;

        return $this;
    }

    /**
     * Get referenz value
     */
    public function getReferenz(): ?\THAG\XKfz\StructType\Type_Referenz
    {
        return $this->referenz;
    }

    /**
     * Set referenz value
     */
    public function setReferenz(?\THAG\XKfz\StructType\Type_Referenz $referenz = null): self
    {
        $this->referenz = $referenz;

        return $this;
    }
}
