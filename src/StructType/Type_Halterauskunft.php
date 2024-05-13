<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Halterauskunft StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Halterauskunft extends AbstractStructBase
{
    /**
     * The status
     */
    public ?\THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft $status = null;

    /**
     * The auskunft
     */
    public ?\THAG\XKfz\StructType\Type_AuskunftHalterauskunft $auskunft = null;

    /**
     * The gebuehrenAnfrager
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehrenAnfrager = null;

    /**
     * The gebuehrenAnfragerPDF
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $gebuehrenAnfragerPDF = null;

    /**
     * Constructor method for Type.Halterauskunft
     *
     * @uses Type_Halterauskunft::setStatus()
     * @uses Type_Halterauskunft::setAuskunft()
     * @uses Type_Halterauskunft::setGebuehrenAnfrager()
     * @uses Type_Halterauskunft::setGebuehrenAnfragerPDF()
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
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft
    {
        return $this->status;
    }

    /**
     * Set status value
     */
    public function setStatus(?\THAG\XKfz\StructType\Type_StatusElektronischerAntragAuskunft $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get auskunft value
     */
    public function getAuskunft(): ?\THAG\XKfz\StructType\Type_AuskunftHalterauskunft
    {
        return $this->auskunft;
    }

    /**
     * Set auskunft value
     */
    public function setAuskunft(?\THAG\XKfz\StructType\Type_AuskunftHalterauskunft $auskunft = null): self
    {
        $this->auskunft = $auskunft;

        return $this;
    }

    /**
     * Get gebuehrenAnfrager value
     */
    public function getGebuehrenAnfrager(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
    {
        return $this->gebuehrenAnfrager;
    }

    /**
     * Set gebuehrenAnfrager value
     */
    public function setGebuehrenAnfrager(?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehrenAnfrager = null): self
    {
        $this->gebuehrenAnfrager = $gebuehrenAnfrager;

        return $this;
    }

    /**
     * Get gebuehrenAnfragerPDF value
     */
    public function getGebuehrenAnfragerPDF(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument
    {
        return $this->gebuehrenAnfragerPDF;
    }

    /**
     * Set gebuehrenAnfragerPDF value
     */
    public function setGebuehrenAnfragerPDF(?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $gebuehrenAnfragerPDF = null): self
    {
        $this->gebuehrenAnfragerPDF = $gebuehrenAnfragerPDF;

        return $this;
    }
}
