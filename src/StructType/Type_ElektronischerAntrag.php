<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ElektronischerAntrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ElektronischerAntrag extends AbstractStructBase
{
    /**
     * The kopf
     * @var \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag|null
     */
    public ?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopf = null;
    /**
     * The status
     * @var \THAG\XKfz\StructType\Type_StatusElektronischerAntrag|null
     */
    public ?\THAG\XKfz\StructType\Type_StatusElektronischerAntrag $status = null;
    /**
     * The vorgangskomponenten
     * @var \THAG\XKfz\StructType\Type_Vorgangskomponenten|null
     */
    public ?\THAG\XKfz\StructType\Type_Vorgangskomponenten $vorgangskomponenten = null;
    /**
     * The registerdaten
     * @var \THAG\XKfz\StructType\ZulassungsabschnittZWTyp|null
     */
    public ?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp $registerdaten = null;
    /**
     * The prozesshinweise
     * @var \THAG\XKfz\StructType\Type_Prozesshinweise|null
     */
    public ?\THAG\XKfz\StructType\Type_Prozesshinweise $prozesshinweise = null;
    /**
     * Constructor method for Type.ElektronischerAntrag
     * @uses Type_ElektronischerAntrag::setKopf()
     * @uses Type_ElektronischerAntrag::setStatus()
     * @uses Type_ElektronischerAntrag::setVorgangskomponenten()
     * @uses Type_ElektronischerAntrag::setRegisterdaten()
     * @uses Type_ElektronischerAntrag::setProzesshinweise()
     * @param \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopf
     * @param \THAG\XKfz\StructType\Type_StatusElektronischerAntrag $status
     * @param \THAG\XKfz\StructType\Type_Vorgangskomponenten $vorgangskomponenten
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZWTyp $registerdaten
     * @param \THAG\XKfz\StructType\Type_Prozesshinweise $prozesshinweise
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
     * @return \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag|null
     */
    public function getKopf(): ?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag
    {
        return $this->kopf;
    }
    /**
     * Set kopf value
     * @param \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopf
     * @return \THAG\XKfz\StructType\Type_ElektronischerAntrag
     */
    public function setKopf(?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopf = null): self
    {
        $this->kopf = $kopf;
        
        return $this;
    }
    /**
     * Get status value
     * @return \THAG\XKfz\StructType\Type_StatusElektronischerAntrag|null
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Type_StatusElektronischerAntrag
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \THAG\XKfz\StructType\Type_StatusElektronischerAntrag $status
     * @return \THAG\XKfz\StructType\Type_ElektronischerAntrag
     */
    public function setStatus(?\THAG\XKfz\StructType\Type_StatusElektronischerAntrag $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get vorgangskomponenten value
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponenten|null
     */
    public function getVorgangskomponenten(): ?\THAG\XKfz\StructType\Type_Vorgangskomponenten
    {
        return $this->vorgangskomponenten;
    }
    /**
     * Set vorgangskomponenten value
     * @param \THAG\XKfz\StructType\Type_Vorgangskomponenten $vorgangskomponenten
     * @return \THAG\XKfz\StructType\Type_ElektronischerAntrag
     */
    public function setVorgangskomponenten(?\THAG\XKfz\StructType\Type_Vorgangskomponenten $vorgangskomponenten = null): self
    {
        $this->vorgangskomponenten = $vorgangskomponenten;
        
        return $this;
    }
    /**
     * Get registerdaten value
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp|null
     */
    public function getRegisterdaten(): ?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp
    {
        return $this->registerdaten;
    }
    /**
     * Set registerdaten value
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZWTyp $registerdaten
     * @return \THAG\XKfz\StructType\Type_ElektronischerAntrag
     */
    public function setRegisterdaten(?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp $registerdaten = null): self
    {
        $this->registerdaten = $registerdaten;
        
        return $this;
    }
    /**
     * Get prozesshinweise value
     * @return \THAG\XKfz\StructType\Type_Prozesshinweise|null
     */
    public function getProzesshinweise(): ?\THAG\XKfz\StructType\Type_Prozesshinweise
    {
        return $this->prozesshinweise;
    }
    /**
     * Set prozesshinweise value
     * @param \THAG\XKfz\StructType\Type_Prozesshinweise $prozesshinweise
     * @return \THAG\XKfz\StructType\Type_ElektronischerAntrag
     */
    public function setProzesshinweise(?\THAG\XKfz\StructType\Type_Prozesshinweise $prozesshinweise = null): self
    {
        $this->prozesshinweise = $prozesshinweise;
        
        return $this;
    }
}
