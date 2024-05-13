<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ZertifikatAbrufen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ZertifikatAbrufen extends AbstractStructBase
{
    /**
     * The artDesZertifikates
     * @var \THAG\XKfz\StructType\Type_ArtDesZertifikates|null
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null;
    /**
     * The referenzMandantAbsender
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null;
    /**
     * The referenzMandantEmpfaenger
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null;
    /**
     * Constructor method for Type.ZertifikatAbrufen
     * @uses Type_ZertifikatAbrufen::setArtDesZertifikates()
     * @uses Type_ZertifikatAbrufen::setReferenzMandantAbsender()
     * @uses Type_ZertifikatAbrufen::setReferenzMandantEmpfaenger()
     * @param \THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null, ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null, ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null)
    {
        $this
            ->setArtDesZertifikates($artDesZertifikates)
            ->setReferenzMandantAbsender($referenzMandantAbsender)
            ->setReferenzMandantEmpfaenger($referenzMandantEmpfaenger);
    }
    /**
     * Get artDesZertifikates value
     * @return \THAG\XKfz\StructType\Type_ArtDesZertifikates|null
     */
    public function getArtDesZertifikates(): ?\THAG\XKfz\StructType\Type_ArtDesZertifikates
    {
        return $this->artDesZertifikates;
    }
    /**
     * Set artDesZertifikates value
     * @param \THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates
     * @return \THAG\XKfz\StructType\Type_ZertifikatAbrufen
     */
    public function setArtDesZertifikates(?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null): self
    {
        $this->artDesZertifikates = $artDesZertifikates;
        
        return $this;
    }
    /**
     * Get referenzMandantAbsender value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getReferenzMandantAbsender(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzMandantAbsender;
    }
    /**
     * Set referenzMandantAbsender value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender
     * @return \THAG\XKfz\StructType\Type_ZertifikatAbrufen
     */
    public function setReferenzMandantAbsender(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null): self
    {
        $this->referenzMandantAbsender = $referenzMandantAbsender;
        
        return $this;
    }
    /**
     * Get referenzMandantEmpfaenger value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getReferenzMandantEmpfaenger(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzMandantEmpfaenger;
    }
    /**
     * Set referenzMandantEmpfaenger value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger
     * @return \THAG\XKfz\StructType\Type_ZertifikatAbrufen
     */
    public function setReferenzMandantEmpfaenger(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null): self
    {
        $this->referenzMandantEmpfaenger = $referenzMandantEmpfaenger;
        
        return $this;
    }
}
