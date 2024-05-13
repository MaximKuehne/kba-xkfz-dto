<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Halterauskunft StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Halterauskunft extends AbstractStructBase
{
    /**
     * The status
     * @var \THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft|null
     */
    public ?\THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft $status = null;
    /**
     * The auskunft
     * @var \THAG\XKfz\StructType\Type_AuskunftHalterauskunft|null
     */
    public ?\THAG\XKfz\StructType\Type_AuskunftHalterauskunft $auskunft = null;
    /**
     * The gebuehrenAnfrager
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehrenAnfrager = null;
    /**
     * The gebuehrenAnfragerPDF
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteDokument|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $gebuehrenAnfragerPDF = null;
    /**
     * Constructor method for Type.Halterauskunft
     * @uses Type_Halterauskunft::setStatus()
     * @uses Type_Halterauskunft::setAuskunft()
     * @uses Type_Halterauskunft::setGebuehrenAnfrager()
     * @uses Type_Halterauskunft::setGebuehrenAnfragerPDF()
     * @param \THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft $status
     * @param \THAG\XKfz\StructType\Type_AuskunftHalterauskunft $auskunft
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehrenAnfrager
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteDokument $gebuehrenAnfragerPDF
     */
    public function __construct(?\THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft $status = null, ?\THAG\XKfz\StructType\Type_AuskunftHalterauskunft $auskunft = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehrenAnfrager = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $gebuehrenAnfragerPDF = null)
    {
        $this
            ->setStatus($status)
            ->setAuskunft($auskunft)
            ->setGebuehrenAnfrager($gebuehrenAnfrager)
            ->setGebuehrenAnfragerPDF($gebuehrenAnfragerPDF);
    }
    /**
     * Get status value
     * @return \THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft|null
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft $status
     * @return \THAG\XKfz\StructType\Type_Halterauskunft
     */
    public function setStatus(?\THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get auskunft value
     * @return \THAG\XKfz\StructType\Type_AuskunftHalterauskunft|null
     */
    public function getAuskunft(): ?\THAG\XKfz\StructType\Type_AuskunftHalterauskunft
    {
        return $this->auskunft;
    }
    /**
     * Set auskunft value
     * @param \THAG\XKfz\StructType\Type_AuskunftHalterauskunft $auskunft
     * @return \THAG\XKfz\StructType\Type_Halterauskunft
     */
    public function setAuskunft(?\THAG\XKfz\StructType\Type_AuskunftHalterauskunft $auskunft = null): self
    {
        $this->auskunft = $auskunft;
        
        return $this;
    }
    /**
     * Get gebuehrenAnfrager value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren|null
     */
    public function getGebuehrenAnfrager(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
    {
        return $this->gebuehrenAnfrager;
    }
    /**
     * Set gebuehrenAnfrager value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehrenAnfrager
     * @return \THAG\XKfz\StructType\Type_Halterauskunft
     */
    public function setGebuehrenAnfrager(?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehrenAnfrager = null): self
    {
        $this->gebuehrenAnfrager = $gebuehrenAnfrager;
        
        return $this;
    }
    /**
     * Get gebuehrenAnfragerPDF value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteDokument|null
     */
    public function getGebuehrenAnfragerPDF(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument
    {
        return $this->gebuehrenAnfragerPDF;
    }
    /**
     * Set gebuehrenAnfragerPDF value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteDokument $gebuehrenAnfragerPDF
     * @return \THAG\XKfz\StructType\Type_Halterauskunft
     */
    public function setGebuehrenAnfragerPDF(?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $gebuehrenAnfragerPDF = null): self
    {
        $this->gebuehrenAnfragerPDF = $gebuehrenAnfragerPDF;
        
        return $this;
    }
}
