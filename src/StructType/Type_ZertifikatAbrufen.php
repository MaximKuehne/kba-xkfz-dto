<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ZertifikatAbrufen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ZertifikatAbrufen extends AbstractStructBase
{
    /**
     * The artDesZertifikates
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null;

    /**
     * The referenzMandantAbsender
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null;

    /**
     * The referenzMandantEmpfaenger
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null;

    /**
     * Constructor method for Type.ZertifikatAbrufen
     *
     * @uses Type_ZertifikatAbrufen::setArtDesZertifikates()
     * @uses Type_ZertifikatAbrufen::setReferenzMandantAbsender()
     * @uses Type_ZertifikatAbrufen::setReferenzMandantEmpfaenger()
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
     */
    public function getArtDesZertifikates(): ?\THAG\XKfz\StructType\Type_ArtDesZertifikates
    {
        return $this->artDesZertifikates;
    }

    /**
     * Set artDesZertifikates value
     */
    public function setArtDesZertifikates(?\THAG\XKfz\StructType\Type_ArtDesZertifikates $artDesZertifikates = null): self
    {
        $this->artDesZertifikates = $artDesZertifikates;

        return $this;
    }

    /**
     * Get referenzMandantAbsender value
     */
    public function getReferenzMandantAbsender(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzMandantAbsender;
    }

    /**
     * Set referenzMandantAbsender value
     */
    public function setReferenzMandantAbsender(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null): self
    {
        $this->referenzMandantAbsender = $referenzMandantAbsender;

        return $this;
    }

    /**
     * Get referenzMandantEmpfaenger value
     */
    public function getReferenzMandantEmpfaenger(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzMandantEmpfaenger;
    }

    /**
     * Set referenzMandantEmpfaenger value
     */
    public function setReferenzMandantEmpfaenger(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null): self
    {
        $this->referenzMandantEmpfaenger = $referenzMandantEmpfaenger;

        return $this;
    }
}
