<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AuskunftHalterauskunft StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AuskunftHalterauskunft extends AbstractStructBase
{
    /**
     * The ablehnungsgrund
     */
    public ?string $ablehnungsgrund = null;

    /**
     * The auskunftsdaten
     */
    public ?\THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft $auskunftsdaten = null;

    /**
     * The auskunftsergebnisPDF
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $auskunftsergebnisPDF = null;

    /**
     * Constructor method for Type.AuskunftHalterauskunft
     *
     * @uses Type_AuskunftHalterauskunft::setAblehnungsgrund()
     * @uses Type_AuskunftHalterauskunft::setAuskunftsdaten()
     * @uses Type_AuskunftHalterauskunft::setAuskunftsergebnisPDF()
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
     */
    public function getAblehnungsgrund(): ?string
    {
        return $this->ablehnungsgrund;
    }

    /**
     * Set ablehnungsgrund value
     */
    public function setAblehnungsgrund(?string $ablehnungsgrund = null): self
    {
        $this->ablehnungsgrund = $ablehnungsgrund;

        return $this;
    }

    /**
     * Get auskunftsdaten value
     */
    public function getAuskunftsdaten(): ?\THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
    {
        return $this->auskunftsdaten;
    }

    /**
     * Set auskunftsdaten value
     */
    public function setAuskunftsdaten(?\THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft $auskunftsdaten = null): self
    {
        $this->auskunftsdaten = $auskunftsdaten;

        return $this;
    }

    /**
     * Get auskunftsergebnisPDF value
     */
    public function getAuskunftsergebnisPDF(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument
    {
        return $this->auskunftsergebnisPDF;
    }

    /**
     * Set auskunftsergebnisPDF value
     */
    public function setAuskunftsergebnisPDF(?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $auskunftsergebnisPDF = null): self
    {
        $this->auskunftsergebnisPDF = $auskunftsergebnisPDF;

        return $this;
    }
}
