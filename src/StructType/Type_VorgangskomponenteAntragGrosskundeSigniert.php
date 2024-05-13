<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteAntragGrosskundeSigniert StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteAntragGrosskundeSigniert extends AbstractStructBase
{
    /**
     * The antragsdaten
     */
    public ?\THAG\XKfz\StructType\Antragsdaten $antragsdaten = null;

    /**
     * The signatur
     */
    public ?string $signatur = null;

    /**
     * The antragsdatenVorsystem
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $antragsdatenVorsystem = null;

    /**
     * Constructor method for Type.VorgangskomponenteAntragGrosskundeSigniert
     *
     * @uses Type_VorgangskomponenteAntragGrosskundeSigniert::setAntragsdaten()
     * @uses Type_VorgangskomponenteAntragGrosskundeSigniert::setSignatur()
     * @uses Type_VorgangskomponenteAntragGrosskundeSigniert::setAntragsdatenVorsystem()
     */
    public function __construct(?\THAG\XKfz\StructType\Antragsdaten $antragsdaten = null, ?string $signatur = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $antragsdatenVorsystem = null)
    {
        $this
            ->setAntragsdaten($antragsdaten)
            ->setSignatur($signatur)
            ->setAntragsdatenVorsystem($antragsdatenVorsystem);
    }

    /**
     * Get antragsdaten value
     */
    public function getAntragsdaten(): ?\THAG\XKfz\StructType\Antragsdaten
    {
        return $this->antragsdaten;
    }

    /**
     * Set antragsdaten value
     */
    public function setAntragsdaten(?\THAG\XKfz\StructType\Antragsdaten $antragsdaten = null): self
    {
        $this->antragsdaten = $antragsdaten;

        return $this;
    }

    /**
     * Get signatur value
     */
    public function getSignatur(): ?string
    {
        return $this->signatur;
    }

    /**
     * Set signatur value
     */
    public function setSignatur(?string $signatur = null): self
    {
        $this->signatur = $signatur;

        return $this;
    }

    /**
     * Get antragsdatenVorsystem value
     */
    public function getAntragsdatenVorsystem(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert
    {
        return $this->antragsdatenVorsystem;
    }

    /**
     * Set antragsdatenVorsystem value
     */
    public function setAntragsdatenVorsystem(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $antragsdatenVorsystem = null): self
    {
        $this->antragsdatenVorsystem = $antragsdatenVorsystem;

        return $this;
    }
}
