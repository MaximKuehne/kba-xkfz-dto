<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteAntragGrosskundeSigniert StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteAntragGrosskundeSigniert extends AbstractStructBase
{
    /**
     * The antragsdaten
     * @var \THAG\XKfz\StructType\Antragsdaten|null
     */
    public ?\THAG\XKfz\StructType\Antragsdaten $antragsdaten = null;
    /**
     * The signatur
     * @var string|null
     */
    public ?string $signatur = null;
    /**
     * The antragsdatenVorsystem
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $antragsdatenVorsystem = null;
    /**
     * Constructor method for Type.VorgangskomponenteAntragGrosskundeSigniert
     * @uses Type_VorgangskomponenteAntragGrosskundeSigniert::setAntragsdaten()
     * @uses Type_VorgangskomponenteAntragGrosskundeSigniert::setSignatur()
     * @uses Type_VorgangskomponenteAntragGrosskundeSigniert::setAntragsdatenVorsystem()
     * @param \THAG\XKfz\StructType\Antragsdaten $antragsdaten
     * @param string $signatur
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $antragsdatenVorsystem
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
     * @return \THAG\XKfz\StructType\Antragsdaten|null
     */
    public function getAntragsdaten(): ?\THAG\XKfz\StructType\Antragsdaten
    {
        return $this->antragsdaten;
    }
    /**
     * Set antragsdaten value
     * @param \THAG\XKfz\StructType\Antragsdaten $antragsdaten
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert
     */
    public function setAntragsdaten(?\THAG\XKfz\StructType\Antragsdaten $antragsdaten = null): self
    {
        $this->antragsdaten = $antragsdaten;
        
        return $this;
    }
    /**
     * Get signatur value
     * @return string|null
     */
    public function getSignatur(): ?string
    {
        return $this->signatur;
    }
    /**
     * Set signatur value
     * @param string $signatur
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert
     */
    public function setSignatur(?string $signatur = null): self
    {
        $this->signatur = $signatur;
        
        return $this;
    }
    /**
     * Get antragsdatenVorsystem value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert|null
     */
    public function getAntragsdatenVorsystem(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert
    {
        return $this->antragsdatenVorsystem;
    }
    /**
     * Set antragsdatenVorsystem value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $antragsdatenVorsystem
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert
     */
    public function setAntragsdatenVorsystem(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $antragsdatenVorsystem = null): self
    {
        $this->antragsdatenVorsystem = $antragsdatenVorsystem;
        
        return $this;
    }
}
