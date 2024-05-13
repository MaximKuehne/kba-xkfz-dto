<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AuskunftHalterauskunft StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AuskunftHalterauskunft extends AbstractStructBase
{
    /**
     * The ablehnungsgrund
     * @var string|null
     */
    public ?string $ablehnungsgrund = null;
    /**
     * The auskunftsdaten
     * @var \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft|null
     */
    public ?\THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft $auskunftsdaten = null;
    /**
     * The auskunftsergebnisPDF
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteDokument|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $auskunftsergebnisPDF = null;
    /**
     * Constructor method for Type.AuskunftHalterauskunft
     * @uses Type_AuskunftHalterauskunft::setAblehnungsgrund()
     * @uses Type_AuskunftHalterauskunft::setAuskunftsdaten()
     * @uses Type_AuskunftHalterauskunft::setAuskunftsergebnisPDF()
     * @param string $ablehnungsgrund
     * @param \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft $auskunftsdaten
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteDokument $auskunftsergebnisPDF
     */
    public function __construct(?string $ablehnungsgrund = null, ?\THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft $auskunftsdaten = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $auskunftsergebnisPDF = null)
    {
        $this
            ->setAblehnungsgrund($ablehnungsgrund)
            ->setAuskunftsdaten($auskunftsdaten)
            ->setAuskunftsergebnisPDF($auskunftsergebnisPDF);
    }
    /**
     * Get ablehnungsgrund value
     * @return string|null
     */
    public function getAblehnungsgrund(): ?string
    {
        return $this->ablehnungsgrund;
    }
    /**
     * Set ablehnungsgrund value
     * @param string $ablehnungsgrund
     * @return \THAG\XKfz\StructType\Type_AuskunftHalterauskunft
     */
    public function setAblehnungsgrund(?string $ablehnungsgrund = null): self
    {
        $this->ablehnungsgrund = $ablehnungsgrund;
        
        return $this;
    }
    /**
     * Get auskunftsdaten value
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft|null
     */
    public function getAuskunftsdaten(): ?\THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
    {
        return $this->auskunftsdaten;
    }
    /**
     * Set auskunftsdaten value
     * @param \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft $auskunftsdaten
     * @return \THAG\XKfz\StructType\Type_AuskunftHalterauskunft
     */
    public function setAuskunftsdaten(?\THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft $auskunftsdaten = null): self
    {
        $this->auskunftsdaten = $auskunftsdaten;
        
        return $this;
    }
    /**
     * Get auskunftsergebnisPDF value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteDokument|null
     */
    public function getAuskunftsergebnisPDF(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument
    {
        return $this->auskunftsergebnisPDF;
    }
    /**
     * Set auskunftsergebnisPDF value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteDokument $auskunftsergebnisPDF
     * @return \THAG\XKfz\StructType\Type_AuskunftHalterauskunft
     */
    public function setAuskunftsergebnisPDF(?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $auskunftsergebnisPDF = null): self
    {
        $this->auskunftsergebnisPDF = $auskunftsergebnisPDF;
        
        return $this;
    }
}
