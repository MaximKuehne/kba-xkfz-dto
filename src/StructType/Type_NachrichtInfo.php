<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NachrichtInfo StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NachrichtInfo extends AbstractStructBase
{
    /**
     * The kommunikationsschritt
     * @var \THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA|null
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null;
    /**
     * The nachrichtenid
     * @var string|null
     */
    public ?string $nachrichtenid = null;
    /**
     * The zeitpunktDerErstellung
     * @var string|null
     */
    public ?string $zeitpunktDerErstellung = null;
    /**
     * The zeitpunktDerSpeicherung
     * @var string|null
     */
    public ?string $zeitpunktDerSpeicherung = null;
    /**
     * The referenzAbsender
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null;
    /**
     * The nachrichtenidBezugsnachricht
     * @var string|null
     */
    public ?string $nachrichtenidBezugsnachricht = null;
    /**
     * The referenz
     * @var \THAG\XKfz\StructType\Type_Referenz|null
     */
    public ?\THAG\XKfz\StructType\Type_Referenz $referenz = null;
    /**
     * Constructor method for Type.NachrichtInfo
     * @uses Type_NachrichtInfo::setKommunikationsschritt()
     * @uses Type_NachrichtInfo::setNachrichtenid()
     * @uses Type_NachrichtInfo::setZeitpunktDerErstellung()
     * @uses Type_NachrichtInfo::setZeitpunktDerSpeicherung()
     * @uses Type_NachrichtInfo::setReferenzAbsender()
     * @uses Type_NachrichtInfo::setNachrichtenidBezugsnachricht()
     * @uses Type_NachrichtInfo::setReferenz()
     * @param \THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt
     * @param string $nachrichtenid
     * @param string $zeitpunktDerErstellung
     * @param string $zeitpunktDerSpeicherung
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender
     * @param string $nachrichtenidBezugsnachricht
     * @param \THAG\XKfz\StructType\Type_Referenz $referenz
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
     * @return \THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA|null
     */
    public function getKommunikationsschritt(): ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA
    {
        return $this->kommunikationsschritt;
    }
    /**
     * Set kommunikationsschritt value
     * @param \THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt
     * @return \THAG\XKfz\StructType\Type_NachrichtInfo
     */
    public function setKommunikationsschritt(?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null): self
    {
        $this->kommunikationsschritt = $kommunikationsschritt;
        
        return $this;
    }
    /**
     * Get nachrichtenid value
     * @return string|null
     */
    public function getNachrichtenid(): ?string
    {
        return $this->nachrichtenid;
    }
    /**
     * Set nachrichtenid value
     * @param string $nachrichtenid
     * @return \THAG\XKfz\StructType\Type_NachrichtInfo
     */
    public function setNachrichtenid(?string $nachrichtenid = null): self
    {
        $this->nachrichtenid = $nachrichtenid;
        
        return $this;
    }
    /**
     * Get zeitpunktDerErstellung value
     * @return string|null
     */
    public function getZeitpunktDerErstellung(): ?string
    {
        return $this->zeitpunktDerErstellung;
    }
    /**
     * Set zeitpunktDerErstellung value
     * @param string $zeitpunktDerErstellung
     * @return \THAG\XKfz\StructType\Type_NachrichtInfo
     */
    public function setZeitpunktDerErstellung(?string $zeitpunktDerErstellung = null): self
    {
        $this->zeitpunktDerErstellung = $zeitpunktDerErstellung;
        
        return $this;
    }
    /**
     * Get zeitpunktDerSpeicherung value
     * @return string|null
     */
    public function getZeitpunktDerSpeicherung(): ?string
    {
        return $this->zeitpunktDerSpeicherung;
    }
    /**
     * Set zeitpunktDerSpeicherung value
     * @param string $zeitpunktDerSpeicherung
     * @return \THAG\XKfz\StructType\Type_NachrichtInfo
     */
    public function setZeitpunktDerSpeicherung(?string $zeitpunktDerSpeicherung = null): self
    {
        $this->zeitpunktDerSpeicherung = $zeitpunktDerSpeicherung;
        
        return $this;
    }
    /**
     * Get referenzAbsender value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getReferenzAbsender(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzAbsender;
    }
    /**
     * Set referenzAbsender value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender
     * @return \THAG\XKfz\StructType\Type_NachrichtInfo
     */
    public function setReferenzAbsender(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null): self
    {
        $this->referenzAbsender = $referenzAbsender;
        
        return $this;
    }
    /**
     * Get nachrichtenidBezugsnachricht value
     * @return string|null
     */
    public function getNachrichtenidBezugsnachricht(): ?string
    {
        return $this->nachrichtenidBezugsnachricht;
    }
    /**
     * Set nachrichtenidBezugsnachricht value
     * @param string $nachrichtenidBezugsnachricht
     * @return \THAG\XKfz\StructType\Type_NachrichtInfo
     */
    public function setNachrichtenidBezugsnachricht(?string $nachrichtenidBezugsnachricht = null): self
    {
        $this->nachrichtenidBezugsnachricht = $nachrichtenidBezugsnachricht;
        
        return $this;
    }
    /**
     * Get referenz value
     * @return \THAG\XKfz\StructType\Type_Referenz|null
     */
    public function getReferenz(): ?\THAG\XKfz\StructType\Type_Referenz
    {
        return $this->referenz;
    }
    /**
     * Set referenz value
     * @param \THAG\XKfz\StructType\Type_Referenz $referenz
     * @return \THAG\XKfz\StructType\Type_NachrichtInfo
     */
    public function setReferenz(?\THAG\XKfz\StructType\Type_Referenz $referenz = null): self
    {
        $this->referenz = $referenz;
        
        return $this;
    }
}
