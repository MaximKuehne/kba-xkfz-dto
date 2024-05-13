<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ElektronischerAntrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ElektronischerAntrag extends AbstractStructBase
{
    /**
     * The kopf
     */
    public ?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopf = null;

    /**
     * The status
     */
    public ?\THAG\XKfz\StructType\Type_StatusElektronischerAntrag $status = null;

    /**
     * The vorgangskomponenten
     */
    public ?\THAG\XKfz\StructType\Type_Vorgangskomponenten $vorgangskomponenten = null;

    /**
     * The registerdaten
     */
    public ?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp $registerdaten = null;

    /**
     * The prozesshinweise
     */
    public ?\THAG\XKfz\StructType\Type_Prozesshinweise $prozesshinweise = null;

    /**
     * Constructor method for Type.ElektronischerAntrag
     *
     * @uses Type_ElektronischerAntrag::setKopf()
     * @uses Type_ElektronischerAntrag::setStatus()
     * @uses Type_ElektronischerAntrag::setVorgangskomponenten()
     * @uses Type_ElektronischerAntrag::setRegisterdaten()
     * @uses Type_ElektronischerAntrag::setProzesshinweise()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopf = null, ?\THAG\XKfz\StructType\Type_StatusElektronischerAntrag $status = null, ?\THAG\XKfz\StructType\Type_Vorgangskomponenten $vorgangskomponenten = null, ?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp $registerdaten = null, ?\THAG\XKfz\StructType\Type_Prozesshinweise $prozesshinweise = null)
    {
        $this
            ->setKopf($kopf)
            ->setStatus($status)
            ->setVorgangskomponenten($vorgangskomponenten)
            ->setRegisterdaten($registerdaten)
            ->setProzesshinweise($prozesshinweise);
    }

    /**
     * Get kopf value
     */
    public function getKopf(): ?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag
    {
        return $this->kopf;
    }

    /**
     * Set kopf value
     */
    public function setKopf(?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopf = null): self
    {
        $this->kopf = $kopf;

        return $this;
    }

    /**
     * Get status value
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Type_StatusElektronischerAntrag
    {
        return $this->status;
    }

    /**
     * Set status value
     */
    public function setStatus(?\THAG\XKfz\StructType\Type_StatusElektronischerAntrag $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get vorgangskomponenten value
     */
    public function getVorgangskomponenten(): ?\THAG\XKfz\StructType\Type_Vorgangskomponenten
    {
        return $this->vorgangskomponenten;
    }

    /**
     * Set vorgangskomponenten value
     */
    public function setVorgangskomponenten(?\THAG\XKfz\StructType\Type_Vorgangskomponenten $vorgangskomponenten = null): self
    {
        $this->vorgangskomponenten = $vorgangskomponenten;

        return $this;
    }

    /**
     * Get registerdaten value
     */
    public function getRegisterdaten(): ?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp
    {
        return $this->registerdaten;
    }

    /**
     * Set registerdaten value
     */
    public function setRegisterdaten(?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp $registerdaten = null): self
    {
        $this->registerdaten = $registerdaten;

        return $this;
    }

    /**
     * Get prozesshinweise value
     */
    public function getProzesshinweise(): ?\THAG\XKfz\StructType\Type_Prozesshinweise
    {
        return $this->prozesshinweise;
    }

    /**
     * Set prozesshinweise value
     */
    public function setProzesshinweise(?\THAG\XKfz\StructType\Type_Prozesshinweise $prozesshinweise = null): self
    {
        $this->prozesshinweise = $prozesshinweise;

        return $this;
    }
}
